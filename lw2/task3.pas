PROGRAM PrintHello(INPUT, OUTPUT);
USES Dos;
VAR
  NAME, NameVar: STRING;
  INDEX: INTEGER;
BEGIN {Hello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  NAME := GetEnv('QUERY_STRING');
  NameVar := 'name';
  IF POS(NameVar, NAME) > 0
  THEN
    BEGIN
      INDEX := POS('=', NAME);
      IF POS('&', NAME) > 0
      THEN
        NAME := COPY(NAME, 1, POS('&', NAME)- 1);
        NAME := COPY(NAME, INDEX + 1, Length(NAME) - INDEX );
        IF Length(NAME) < 1
        THEN
          WRITELN('Hello Anonymous!')
        ELSE
          WRITELN('Hello, dear ', NAME, ' !')
    END
  ELSE
    WRITELN('Hello anonymous')  
END. {Hello}
 // http://localhost:4001/cgi-bin/lw2/task3.cgi/?name=
