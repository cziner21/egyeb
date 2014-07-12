SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.002000093460083

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
FROM (`dolgozok`) 
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
 Execution Time:0.00099992752075195

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0039999485015869

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
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
FROM (`dolgozok`) 
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
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT `munkaszam`, `projekt_nev`, `hozzadva`, `megrendeles_datuma`, `munka`.`hatarido` as munkahatar, `munka`.`statusz` as munkastatusz, `arajanlat_id`, `rajzszam`, `bizonylatszam`, `komponens_id`
FROM (`munka`)
JOIN `munka_rajz_kapcs` ON `munka`.`munkaszam` = `munka_rajz_kapcs`.`munka_munkaszam`
JOIN `rajz` ON `munka_rajz_kapcs`.`rajz_rajzszam` = `rajz`.`rajzszam`
JOIN `munka_komponens_kapcs` ON `munka`.`munkaszam` = `munka_komponens_kapcs`.`munka_munkaszam`
JOIN `komponens` ON `munka_komponens_kapcs`.`komponens_komponens_id` = `komponens`.`komponens_id`
JOIN `munkalap` ON `munka`.`munkaszam` = `munkalap`.`munka_munkaszam` 
 Execution Time:0.0080008506774902

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
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
 Execution Time:0.0010011196136475

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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0019998550415039

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
FROM (`dolgozok`) 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0039999485015869

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.0030009746551514

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

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
 Execution Time:0.0010001659393311

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
FROM (`dolgozok`) 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`dolgozok`) 
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
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`) 
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
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '16' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '16' 
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
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

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
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

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
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`) 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '17' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '17' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`) 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '17' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '17' 
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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
 Execution Time:0.0010008811950684

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '17' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '17' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
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
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

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

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0010001659393311

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
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.0010008811950684

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
 Execution Time:0.00099992752075195

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
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

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
FROM (`dolgozok`) 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

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
 Execution Time:0

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

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
 Execution Time:0.0039999485015869

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`) 
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
 Execution Time:0

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
 Execution Time:0.0010008811950684

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
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
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
 Execution Time:0.0010001659393311

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
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0010001659393311

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

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
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
 Execution Time:0.0010001659393311

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

