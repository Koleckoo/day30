
-- selection two tables an joing to the left one based on country id and id
-- where city population is bigger then 5 mil

SELECT *
FROM `cities`
LEFT JOIN `countries` 
	ON `cities` . `country_id` = `countries` . `id`
WHERE `cities` . `population` > 5000000;

SELECT * 
FROM `country_language`
LEFT JOIN `countries`
	ON `country_language` . `country_id` = `countries` . `id`
WHERE `country_language` . `language_id` = 110;

-- alias only for selecting the column
--cant use it later
SELECT `countries` . `name` AS country_name, `cities` . `name` AS city_name
FROM `countries`, `cities`
WHERE `countries` . `name` = "&ba%";