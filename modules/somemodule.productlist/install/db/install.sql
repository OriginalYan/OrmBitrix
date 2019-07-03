CREATE TABLE `my_products` (
  `ID` int(11) UNSIGNED NOT NULL,
  `UF_NAME` text COLLATE utf8_unicode_ci,
  `UF_PRICE` text COLLATE utf8_unicode_ci
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;

ALTER TABLE `my_products` ADD PRIMARY KEY (`ID`);

ALTER TABLE `my_products`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;