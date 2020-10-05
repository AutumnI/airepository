<!DOCTYPE html>
<html lang="en">
<head>
        <title>Basic Calculator App</title>
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <meta charset="UTF-8" name="author" content="Autumn Irvin">
        <script type="text/javascript" src="js/jscript.js"></script>
        <!-- <link href="css/css.css" rel="stylesheet"> -->
</head>
<body> 
    <table>
        <!-- this is the head section of the calculator -->
        <tr>
            <tr>
                <td class="heading">
                      Autumns Calculator 
                </td>
            </tr>
             
            <td>
                <input type="text" id="input" placeholder="0" readonly="readonly" style ="color: darkslateblue;">
                <input type="text" id="answer" readonly="readonly" style="color: darkseagreen;">
            </td>
                
        </tr>
        <!-- buttons section of the calculator -->
        <tr>
            
            <td>
            <input type ="button" value="=" onclick="compute()">
                <input type="button" value=" &#247; " onclick="getOperand('/')">
                <input type="button" value=" x " onclick="getOperand('x')">
                <input type="button" value=" &#8592; " onclick="backspace()" style="color: burlywood;">
                <br>
                <input type="button" value="1" onclick="getNumber(1)">
                <input type="button" value="2" onclick="getNumber(2)">
                <input type="button" value="3" onclick="getNumber(3)">
                <input type="button" value="+" onclick="getOperand('+')">
                <br>
                <input type="button" value="4" onclick="getNumber(4)">
                <input type="button" value="5" onclick="getNumber(5)">
                <input type="button" value="6" onclick="getNumber(6)">
                <input type="button" value="-" onclick="getOperand('-')">
                <br>
                <input type="button" value="7" onclick="getNumber(7)">
                <input type="button" value="8" onclick="getNumber(8)">
                <input type="button" value="9" onclick="getNumber(9)">
                <input type="button" value=" () " onclick="brackets()">
                <br>
                <input type="button" value="^" onclick="getCalc('**')">
                <input type="button" value="0" onclick="getNumber(0)">
                <input type="button" value="." onclick="getOperand('.')">
                <input type="button" value=" CLR " onclick="clearScreen()" style="color:white; background: burlywood;">
        
                <br>
            </td>
        </tr>
        
    </table>
</body>
</html>

