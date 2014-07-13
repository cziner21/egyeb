SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0.0049998760223389

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0.003000020980835

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0019998550415039

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.002000093460083

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0019998550415039

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-2') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-3') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-2') 
 Execution Time:0.0040009021759033

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0002') 
 Execution Time:0.0050010681152344

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0003') 
 Execution Time:0.0030012130737305

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0004') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0005') 
 Execution Time:0.005000114440918

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0006') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.003000020980835

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0007') 
 Execution Time:0.002000093460083

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0008') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0009') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0010') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0011') 
 Execution Time:0.0020010471343994

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0012') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0013') 
 Execution Time:0.0050010681152344

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0014') 
 Execution Time:0.0010001659393311

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0015') 
 Execution Time:0.0030009746551514

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0016') 
 Execution Time:0.0030009746551514

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0017') 
 Execution Time:0.0010001659393311

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0018') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0019') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0020') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0021') 
 Execution Time:0.0010001659393311

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0022') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0023') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0024') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0025') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0026') 
 Execution Time:0.0020010471343994

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0027') 
 Execution Time:0.0030009746551514

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0028') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0029') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0030') 
 Execution Time:0.0080010890960693

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0031') 
 Execution Time:0.0020010471343994

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0032') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0033') 
 Execution Time:0.002000093460083

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0034') 
 Execution Time:0.002000093460083

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0035') 
 Execution Time:0.0019998550415039

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0036') 
 Execution Time:0.0019998550415039

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0037') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0038') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0039') 
 Execution Time:0.0010001659393311

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0040') 
 Execution Time:0.0039999485015869

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0041') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0042') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0043') 
 Execution Time:0.0019998550415039

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0044') 
 Execution Time:0.002000093460083

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0045') 
 Execution Time:0.0010008811950684

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0046') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0047') 
 Execution Time:0.0020010471343994

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0048') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0049') 
 Execution Time:0.0030012130737305

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0171') 
 Execution Time:0.0040009021759033

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0172') 
 Execution Time:0.0030009746551514

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.002000093460083

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.002000093460083

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.002000093460083

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.002000093460083

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.002000093460083

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0019998550415039

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0080001354217529

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.003000020980835

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.012001037597656

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0050010681152344

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 'aj_01', 'NT2014-0001') 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.002000093460083

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.003000020980835

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.002000093460083

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.002000093460083

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0029997825622559

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0050010681152344

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.005000114440918

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

