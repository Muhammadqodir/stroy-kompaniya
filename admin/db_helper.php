<?php

class DBHelper
{


  public $mysqli;

  function __construct()
  {
    require "config.php";

    $this->mysqli = new mysqli($host, $user, $password, $db);

    $this->mysqli->set_charset("utf8");

    // Check connection
    if ($this->mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
      exit();
    }
  }

  function getField($field)
  {
    $sql = "SELECT * FROM fields WHERE name='$field'";
    if ($result = $this->mysqli->query($sql)) {
      return $result->fetch_assoc()["value"];
    } else {
      return "undefined";
    }
  }
  function updateField($field, $val)
  {
    $sql = "UPDATE fields SET value='$val' WHERE name='$field'";
    if ($result = $this->mysqli->query($sql)) {
      return true;
    } else {
      return false;
    }
  }

  function register($phone)
  {
    $sql = "SELECT * FROM users WHERE phone = '$phone'";
    if ($result = $this->mysqli->query($sql)) {
      $row = $result->fetch_assoc();
      if ($row != null && $row != false) {
        return $row;
      } else {
        if ($this->newUser($phone)) {
          return $this->register($phone);
        } else {
          return "undefined";
        }
      }
    } else {
      return "undefined";
    }
  }

  function generateToken($length)
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  function newUser($phone)
  {
    $token = $this->generateToken(16);
    $sql = "INSERT INTO users (phone, fullName, gender, birth_day, token) VALUES ('$phone', 'undefined', 'undefined', 'undefined', '$token')";

    if ($this->mysqli->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function newMenuPosition($title, $description, $price, $category, $pic)
  {
    $sql = "INSERT INTO `products` (`title`, `description`, `pic`, `price`, `category`) 
    VALUES ('$title', '$description', '$pic', $price, '$category')";

    if ($this->mysqli->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function removeMenuPosition($id)
  {

    $sql = "DELETE FROM products WHERE id = $id";

    if ($this->mysqli->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function getUsers()
  {
    $res = [];
    $sql = "SELECT * FROM users";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_row()) {
        $res[] = $row;
      }
      $result->free_result();
    }

    return $res;
  }

  function getAllMenu()
  {
    $res = [];
    $sql = "SELECT * FROM products";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_assoc()) {
        $res[] = $row;
      }
      $result->free_result();
    }

    return $res;
  }
  function getAllFields()
  {
    $res = [];
    $sql = "SELECT * FROM fields";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_assoc()) {
        $res[] = $row;
      }
      $result->free_result();
    }

    return $res;
  }

  function getMenuByCategory($id)
  {
    $res = [];
    $sql = "SELECT * FROM products WHERE category=$id";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_assoc()) {
        $res[] = $row;
      }
      $result->free_result();
    }

    return $res;
  }

  function getAllServices()
  {
    $res = [];
    $sql = "SELECT * FROM categories";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_assoc()) {
        $res[] = $row;
      }
      $result->free_result();
    }

    return $res;
  }

  function getService($id)
  {
    $sql = "SELECT * FROM categories WHERE id=$id";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_assoc()) {
        return $row;
      }
      $result->free_result();
    }

    return null;
  }

  function getCategories()
  {
    $res = [];
    $sql = "SELECT * FROM categories;";

    if ($result = $this->mysqli->query($sql)) {
      while ($row = $result->fetch_assoc()) {
        $res[] = $row;
      }
      $result->free_result();
    }

    return $res;
  }

  function closeConnection()
  {
    $this->mysqli->close();
  }
}
