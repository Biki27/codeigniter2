# codeigniter

db change

ALTER TABLE `sejobapplicant` MODIFY COLUMN `sejoba_state` ENUM('applied', 'pending', 'interviewing', 'selected', 'rejected', 'hired') NOT NULL DEFAULT 'applied';
