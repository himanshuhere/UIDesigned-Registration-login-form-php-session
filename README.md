simple login and registration designed form using php mysql.

///// if you want just php without design just contact


<html>
   <head>
       <style>
           .operator{
            width: 100px;
    height: 40px;
    background: white;
    border: solid #927c7c7a 0.5px;
    font-size: 32px;
    border-radius: 7px;
    color: #0a0a0a91;
    font-family: 'Helvetica', 'Arial', sans-serif;
 
           }
        .btn{

            width: 100px;
    height: 40px;
    background: white;
    border: solid #c7e1e4 0.5px;
    font-size: 32px;
    border-radius: 7px;
    color: #0a0a0a91;
  font-family: 'Helvetica', 'Arial', sans-serif;
 
        }
        </style>
   </head>
   <body>
      <form name="calculator">
                 <table style="    position: relative;
                 top: 165px;
                 left: 33%;">
            <tr>
               <td colspan="4">
                  <input style="      background: white;
                  border: solid #b9d6d3 1px;
                  border-radius: 6px;
                  width: 411px;
                  height: 113px;
                  margin-bottom: 25px;
                  font-size: 40px;
                  color: #043c3ca8;
                  padding-left: 20px;
              " type="text" name="display" id="display" disabled>
               </td>
                 </tr>
               <tr>
               <td><input type="button" class="btn"  name="one" value="1" onclick="calculator.display.value += '1'"></td>
                     <td><input type="button" class="btn"  name="two" value="2"          onclick="calculator.display.value += '2'"></td>
                          <td><input type="button" class="btn" name="three" value="3" 
                            onclick="calculator.display.value += '3'"></td>
               <td><input type="button" class="operator" name="plus" value="+" onclick="calculator.display.value += '+'"></td>
            </tr>
            <tr>
                    <td><input type="button" name="four" class="btn" value="4" 
                                onclick="calculator.display.value += '4'"></td>
               <td><input type="button" name="five" value="5" class="btn" 
                    onclick="calculator.display.value += '5'"></td>
                           <td><input type="button" name="six" class="btn" value="6" 
                                onclick="calculator.display.value += '6'"></td>
               <td><input type="button" class="operator" name="minus" value="-"
                         onclick="calculator.display.value += '-'"></td>
            </tr>
            <tr>
                        <td><input type="button" name="seven" class="btn"  value="7"
                                 onclick="calculator.display.value += '7'"></td>
                            <td><input type="button" name="eight" class="btn" value="8" onclick="calculator.display.value += '8'"></td>
                     <td><input type="button" name="nine" value="9" class="btn"  
                            onclick="calculator.display.value += '9'"></td>
               <td><input type="button" class="operator" name="times" value="x" onclick="calculator.display.value += '*'"></td>
            </tr>
                <tr>
                       <td><input type="button" id="clear" class="operator" name="clear" value="c"
                             onclick="calculator.display.value = ''"></td>
                <td><input type="button" name="zero" value="0" class="btn"
        onclick="calculator.display.value += '0'"></td>
                      <td><input type="button" name="doit" value="=" class="operator"
                            onclick="calculator.display.value = eval(calculator.display.value)"></td>
               <td><input type="button" class="operator" name="div" value="/"
                 onclick="calculator.display.value += '/'"></td>
            </tr>
         </table>
      </form>
   </body>
   </head>
</html>
