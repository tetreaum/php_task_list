USE taskdb;

INSERT INTO Priority (PrioId, PrioType) values
	(1, 'Low'),
    (2, 'Medium'),
    (3, 'High'),
    (4, 'Critical');
    
INSERT INTO TaskStatus (StatusId, StatusType) values
	(1, 'Pending'),
    (2, 'Progress'),
    (3, 'Complete');
    