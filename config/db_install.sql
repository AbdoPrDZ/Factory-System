CREATE TABLE IF NOT EXISTS `requests`(
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `requesting_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `end_production_date` DATETIME NULL,
  `machine` VARCHAR(255) NOT NULL,
  `threads` JSON NOT NULL,
  `total_weight` FLOAT(11) NULL DEFAULT(0),
  `units_number` INT(11) NULL DEFAULT(0),
  `price` INT(11) NOT NULL,
  `total_amount` FLOAT(11) NULL DEFAULT(0)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `units`(
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `request_id` INT(11) NOT NULL,
  `worker_id` INT(11) NOT NULL,
  `unit_weight` FLOAT(11) NOT NULL,
  `production_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `invoice_date` DATETIME NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `invoices`(
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `request_id` INT(11) NOT NULL,
  `worker_id` INT(11) NOT NULL,
  `units_number` INT(11) NOT NULL,
  `weight` FLOAT(11) NOT NULL,
  `amount` FLOAT(11) NOT NULL,
  `invoice_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `workers`(
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `birth_date` DATE NOT NULL,
  `gander` ENUM("Male", "Female") DEFAULT("Male") NOT NULL,
  `join_date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `checkout_date` DATETIME NULL,
  `phone` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `salary` INT(11) NULL DEFAULT(0),
  `balance` INT(11) NULL DEFAULT(0),
  `working_hours` INT(11) NULL DEFAULT(0),
  `working_days` INT(11) NULL DEFAULT(0),
  `exists` ENUM("Yes", "No") DEFAULT("No") NOT NULL,
  `settings` JSON NOT NULL DEFAULT(JSON_OBJECT())
) ENGINE=InnoDB;

-- CREATE TABLE IF NOT EXISTS `workers_control`(
  -- `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  -- `worker_id` VARCHAR(255) NOT NULL,
  -- `entry_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  -- `exit_time` DATETIME NULL
-- ) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `notifications`(
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `readed` VARCHAR(255) NOT NULL DEFAULT "[]"
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `messages`(
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `worker_id` INT(11) NOT NULL,
  `message` TEXT NOT NULL,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `settings`(
  `name` VARCHAR(255) NOT NULL PRIMARY KEY,
  `type` VARCHAR(255) NOT NULL,
  `vals` JSON NOT NULL DEFAULT(JSON_OBJECT())
) ENGINE=InnoDB;