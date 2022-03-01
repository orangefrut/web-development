PROGRAM SarahRever(INPUT, OUTPUT);
USES 
  Dos;
VAR
  Query: STRING;
BEGIN 
  WRITELN('Content_Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  IF Query = 'lanterns=1'
  THEN
    WRITELN('British are coming by land')
  ELSE
    IF Query = 'lanterns=2'
    THEN
      WRITELN('British are coming by sea')
    ELSE
      WRITELN('Sarah did not say')
END.

//http://localhost:4001/cgi-bin/task2.cgi/?lanterns=2
//http://localhost:4001/cgi-bin/task2.cgi/?lanterns=1
//http://localhost:4001/cgi-bin/task2.cgi/