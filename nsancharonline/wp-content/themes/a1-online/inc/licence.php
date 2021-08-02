<?php

  /* 1. Generate initial license key data. */
  function generate_license_key(string $user_name, string $password, int $total_installs = 1) {

    if (!strstr($user_name, '_license_key')) {
      $user_name .= '_license_key';
    }

    // Shouldn't be able to continue if there is license key found.
    if (get_option($user_name)) {
      return false;
    }
    
    // Generate initial license data.
    $license_key = array(
      'unique_key'      => bin2hex(openssl_random_pseudo_bytes(16)),
      'start_date'      => date('Y-m-d'),
      'end_date'        => date('Y-m-d', strtotime('+1 year')),
      'active_installs' => 0,
      'total_installs'  => $total_installs,
      'sites'           => array(),
      'password'        => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),
    );
    
    add_option($user_name, $license_key);
  }

  /* 2. Retrieve license key data.  */
  function get_license_key(string $user_name) {

    if (!strstr($user_name, '_license_key')) {
      $user_name .= '_license_key';
    }

    if (!get_option($user_name, false)) {
      return false;
    }
    
    return get_option($user_name);
  }

  /* 3. Update license key data. */
  function update_license_key(string $user_name, string $url, bool $add = true) {

    if (!strstr($user_name, '_license_key')) {
      $user_name  .= '_license_key';
    }

    $url_domain  = get_domain_only($url);
    $license_key = get_license_key($user_name);  

    if (!$license_key) {
      return false;
    }

    // Add/remove license key active installs.
    if ($add) {
      $license_key['active_installs'] += 1;
    } else { 
      $license_key['active_installs'] -= 1;
    }

    // Set upper limit to totla_installs and lower to 0.
    if ($license_key['active_installs'] > $license_key['total_installs']
      || $license_key['active_installs'] < 0) {
        return false;
    }

    // Check for exsting URL if not found update the list.
    if (!in_array($url_domain, $license_key['sites'])) {
      array_push($license_key['sites'], $url_domain);
    } else {
      $license_key['sites'] = array_diff($license_key['sites'], [$url_domain]);
    }

    // Update license key data and return true.
    update_option($user_name, $license_key, null);
    
    return true;
  }

  // 4. Get only the domain name and remove the rest.
  function get_domain_only(string $url) {

    $url = filter_var($url, FILTER_SANITIZE_URL);
    return preg_replace('/(http\:\/\/|https\:\/\/|www\.)/', '', $url);
  }