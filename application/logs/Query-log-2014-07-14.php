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
 Execution Time:0.0010008811950684

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '56' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '56' 
 Execution Time:0.0010011196136475

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
WHERE `user_id` =  '2' 
 Execution Time:0.0010008811950684

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
 Execution Time:0.0010001659393311

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
 Execution Time:0.00099992752075195

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

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010011196136475


                    SELECT nev, varos FROM megrendelo
                    WHERE nev LIKE '%z%'
                    ORDER BY nev
                 
 Execution Time:0.0010001659393311

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
 Execution Time:0

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.003000020980835

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

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.00099992752075195

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('kisgalamb', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 2, 'NT2014-0001') 
 Execution Time:0.003000020980835

select munkaszam from munka order by hozzadva desc limit 1 
 Execution Time:0.0010001659393311

INSERT INTO `munka` (`projekt_nev`, `megrendeles_datuma`, `hatarido`, `statusz`, `arajanlat_id`, `munkaszam`) VALUES ('köszörűfej', '2012-03-06 17:33:07', '2012-03-08 11:33:07', 2, 2, 'NT2014-0002') 
 Execution Time:0.002000093460083

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0019998550415039

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0010011196136475

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
 Execution Time:0.0010008811950684

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010008811950684

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
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
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  'ZF%20Hung%C3%A1ria' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  'ZF%20Hung%C3%A1ria' 
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '2' 
 Execution Time:0.0030009746551514

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.0010001659393311

select munkaszam, hozzadva, munka.statusz as munkastatusz, nev  from munka inner join arajanlat a on munka.arajanlat_id = a.ajanlat_id inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0.0019998550415039

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  'ZF%20Hung%C3%A1ria' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  'ZF%20Hung%C3%A1ria' 
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
 Execution Time:0.00099992752075195

select * from arajanlat a inner join megrendelo me on me.megrendelo_id = a.megrendelo_megrendelo_id 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  'ZF%20Hung%C3%A1ria' 
 Execution Time:0

SELECT *
FROM (`dolgozok`)
WHERE `id` =  'ZF%20Hung%C3%A1ria' 
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
FROM (`dolgozok`) 
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
WHERE `user_id` =  '18' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '18' 
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
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '2' 
 Execution Time:0.00099992752075195

