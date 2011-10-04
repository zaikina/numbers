var i=0;
 for (i=0;i<=10;i++)
  {if (i==3)
    {
    continue;
    }
      var s = "The number is ";
      document.write(s + i);
  document.write("<br/>");
 }

test("test", function() {
});

Parenizor.method('toString', function ()
   {
        var string = '(' + this.getValue() + ')';
        return string;
    }

