PROGRAM PrintHello(INPUT, OUTPUT);
USES dos; 
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Str: STRING;
BEGIN
  Str := GetEnv('QUERY_STRING');
  IF POS(Key, Str) > 0
  THEN
    BEGIN
      Str := Copy(Str, POS(Key, Str) + Length(Key) + 1, Length(Str) - (POS(Key, Str) + Length(Key)));
      IF POS('&', Str) > 0
      THEN
        GetQueryStringParameter := COPY(Str, 1, POS('&', Str) - 1)   
      ELSE
        GetQueryStringParameter := COPY(Str, 1, Length(Str))   
    END
  ELSE
    GetQueryStringParameter := ''   
END;
  
BEGIN {Hello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {Hello}
   
//http://localhost:4001/cgi-bin/lw2/task4.cgi/?first_name=Olga&last_name=Vasileva&age=19