CREATE TABLE `notes` (
  `notes_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `modified` text CHARACTER SET utf8mb4 NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_id`);

ALTER TABLE `notes`
  MODIFY `notes_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;