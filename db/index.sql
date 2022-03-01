SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `sclass` int(10) NOT NULL,
  `sphone` varchar(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

INSERT INTO
  `student` (`sid`, `sname`, `saddress`, `sclass`, `sphone`)
VALUES
  (1, 'ADMIN', 'SCHOOL', 13, '1111111111');

CREATE TABLE `studentclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

INSERT INTO
  `studentclass` (`cid`, `cname`)
VALUES
  (1, 'NURSERY'),
  (2, 'LKG'),
  (3, 'UKG'),
  (4, '1ST CLASS'),
  (5, '2ND CLASS'),
  (6, '3RD CLASS'),
  (7, '4TH CLASS'),
  (8, '5TH CLASS'),
  (9, '6TH CLASS'),
  (10, '7TH CLASS'),
  (11, '8TH CLASS'),
  (12, '9TH CLASS'),
  (13, '10TH CLASS');

ALTER TABLE
  `student`
ADD
  PRIMARY KEY (`sid`);

ALTER TABLE
  `studentclass`
ADD
  PRIMARY KEY (`cid`);

ALTER TABLE
  `student`
MODIFY
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

ALTER TABLE
  `studentclass`
MODIFY
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;

COMMIT;