SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0.00099992752075195

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1' 
 Execution Time:0

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1'
OR `login` =  'dolg8' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE LOWER(username)= 'dolg8'
OR LOWER(email)= 'dolg8' 
 Execution Time:0.00099992752075195

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1'
OR `login` =  'dolg8' 
 Execution Time:0.0010001659393311

INSERT INTO `login_attempts` (`ip_address`, `login`) VALUES ('::1', 'dolg8') 
 Execution Time:0.0040009021759033

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1'
OR `login` =  'dolg8' 
 Execution Time:0

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1'
OR `login` =  'dolg8' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`)
WHERE LOWER(username)= 'dolg8'
OR LOWER(email)= 'dolg8' 
 Execution Time:0.0010001659393311

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1'
OR `login` =  'dolg8' 
 Execution Time:0.0010001659393311

INSERT INTO `login_attempts` (`ip_address`, `login`) VALUES ('::1', 'dolg8') 
 Execution Time:0.0060000419616699

SELECT 1
FROM (`login_attempts`)
WHERE `ip_address` =  '::1'
OR `login` =  'dolg8' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '23' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '23' 
 Execution Time:0

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '23' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '23' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '23' 
 Execution Time:0.003000020980835

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '23' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '23' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '23' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '23' 
 Execution Time:0.00099992752075195

INSERT INTO `dolgozok` (`username`, `teljes_nev`, `password`, `vezerlopult_megtekintes`, `hozzaferesek_megtekintes`, `priv`, `created`, `activated`) VALUES ('dol10', 'Kiss Árpád', '$P$BwB9nrDnEPYlz/8/dk0Ujb6dwR0Uw//', '1', '1', 'dolgozó', '2014-07-08 00:02:24', 1) 
 Execution Time:0.002000093460083

SELECT *
FROM (`dolgozok`)
WHERE `username` =  'dol10' 
 Execution Time:0.00099992752075195

INSERT INTO `user_profiles` (`user_id`) VALUES ('26') 
 Execution Time:0.0080001354217529

SELECT *
FROM (`user_profiles`)
WHERE `user_id` =  '23' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`)
WHERE `id` =  '23' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`dolgozok`) 
 Execution Time:0.0010001659393311

