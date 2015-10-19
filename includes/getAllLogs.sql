DELIMITER //

drop procedure if exists 'getAllLogs'

create procedure 'getAllLogs' ()
begin
	select
		CONCAT(u.FirstName, ' ', u.LastName) as FullName,
		l.Hours,
		l.Notes,
		l.[Date],
		l.Confirmed
	from Logs l
	inner join User u on l.UserID = u.ID;
end //

