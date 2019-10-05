SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `visite` (
  `id` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `annees` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `jours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `visite`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `visite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

