<form method="post"> 
<table> 
<tr> <td  class="kvit" colspan="3"> ������������ </td> </tr>
<tr> <td colspan="3"> <input type="text" size="90"  name="nameusl" class="required" title="<br>
���� ����������� � ����������"> </td> </tr>
<tr> 
<td  class="kvit"> ����������� </td> 
<td class="kvit">���������, ������ </td>
<td class="kvit">� ��������� </td>
</tr>
<tr>
<td > <input type="file" name="fupload" size="50" /> </td>  
<td><input type="text" size="30"  name="stoimusl" class="required" title="<br> ���� ����������� � ����������"> </td>
<td>  <input type="checkbox" checked name="proz" value="1">  </td>
</tr>
</table>
<p class="kvit" width="100"> �������� ������  (�����������) </p>
<div class="log1" width="100">  <textarea ROWS=8 COLS=80 name="opisusl" >
 </textarea> 
 </div> 
   
<div class="but"> <input type="submit" value="���������" name="ttt"/>  </div>   
</form>

<?  
require "../dbconnect.php";
if(isset($_POST['ttt'])) 
{
echo $_POST['proz'];
}
?>