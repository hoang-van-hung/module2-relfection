
# module2-relfection
#Ngày 2/2/2021 : <br>
<ol type =1>Các cách thực hành clean code :
  <li>Đặt tên biến có nghĩa :Là các danh từ (meaningfull name) </li>
  <li>Đặt tên phương thức là các động từ , </li>
  <li>Đặt tên đọc được, không viết tắt, không quá dài </li>
  <li>Đăt tên theo các quy tắc : PascalCase ,cameCase ,snake_case </li>
  <li>Tính nhất quán của code </li>
  <li>Tránh các điều kiện âm (dùng 2 lần phủ định )</li>
  <li>Mỗi function chỉ nên thực hiện một chức năng</li>
  <li>Tránh lặp lại đoạn code (DRY) </li>
  <li>Nguyên tắc KISS( keep it simple, stupid) giữ mọi thứ đơn giản , ngắn gọn nhất có thể </li>
  <li>Hạn chế sửa đổi trực tiếp code mà khuyến kích mở rộng. Như thế code sẽ ổn định hơn và khả năng bảo trì tốt hơn</li>
  <li>Nguyên lý 'hợp đối tượng thay vì thừa kế' (Đối tượng có hành vi phức tạp, nên bao gồm các thể hiện của nó cùng với các hành vi riêng lẻ hơn là dùng lại một lớp ) </li>
  <li>Nguyên lý single responsibility- Một lớp chỉ nên thay đổi vì một lý do duy nhất</li>
  <li>Nguyên lý Seperation of Concerns-Một chương trình phải được thiết kế sao cho nó bao gồm nhiều gói không giống nhau và các gọi không liên quan đến nhau </li>
  <li>Nguyên tắc YAGNI-không nên code các chức năng mà sau này mới cần</li>
  <li>Nguyên lý Avoid Premature tương tự YAGNI</li>
  <li>Refactoring code </li>  
</ol>
<ul>SOLID : là 5 nguyên lý giúp lập trình viên phát triển phần mềm với kiến trúc tốt .
  <li>S-Single responsibility principle :Mỗi lớp chỉ nên làm duy nhất một nhiệm vụ </li>
  <li>O-Open closed principle: Luôn đóng với mọi thay đổi nhưng luôn mở đối với việc mở rộng </li>
  <li>L-Liskov substitution principle :lớp cha dễ dàng thay thế lớp con</li>
  <li>I-Interface segregation principle: thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ với nhiều mục đích cụ thể </li>
  <li>D-Dependency inversion principle: Các module cấp cao không nên phục thuộc vào các module thấp.Cả 2 nên phụ thuộc vào abstraction ,chi tiết phụ thuộc vào interface (các class giao tiếp với nhau thông qua interface, không phải thông qua implementation ) </li>
</ul>

<br> <br>
#Ngày 1/2/2021 : <br>
>Abstract class là một class, có tính trừu tượng cao, không thể tạo các đối tượng của lớp này. Nó có phương thức được khai báo nhưng không có phần thân.
Abstract class định nghĩa các methods, properties giống nhau bản chất.<br>
>Dùng Abstract class để tái sử dụng code giữa các đoạn code liên quan, thể hiện tính đa hình trong OOP.Giúp cho việc bảo trì và nâng cấp hệ thông sau này dễ dàng, nhanh chóng hơn.
<br>

<ul>
Điểm giống và khác nhau giữa Abstract class và class thường<br>
  Giống :
  <li>Đều là class</li>
  <li>Có thể chứa thuộc tính, phương thức</li>
  Khác :
  <li>Abstract class có tính trừu tượng rất cao, không thể tạo được các đối tượng của lớp đó.</li>
  <li>Phương thức được khai báo nhưng không có phần thân,ngoài ra nó còn có thể có thuộc tính và phương thức bình thương</li>
  <li>Lớp bình thường kế thừa lớp abstract thì phải triển khai tất cả phương thức abstract của lớp cha.</li>
  <li>Lớp và phương thức abstract thì không thể là final</li>
</ul> 
INTERFACE :Là cấu trúc tương tự lớp, chỉ chứa hằng số và abstract method.Nó quy định các hành vi chung cho các lớp triển khai nó, là bản thiết kế cho các method. Các method có định nghĩa giống nhau nhưng khác nhau về bản chất. Sử dụng từ khóa "interface".Một lớp triển khai interface thì cần triển khai tất cả các phương thức được khai báo trong đó <br>
Sử dụng Interface trong trường hợp các class không có quan hệ gần gũi với nhau,bổ sung cho hỗ trợ đa kế thừa.
 





   
<br> <br>
###Ngày 29/1:
3 điều học được : <br>
-Vòng đời của một đối tượng bao gồm: __construct, some_method, __destruct <br>
-Kế thừa là một đặc tính trong OOp, trong đó lớp con được tạo ra từ lớp cha và nó kế thừa tất cả các thuộc tính và phương thức của lớp cha. <br>
-Lớp con có tất cả các thuộc tính, phương thức của lớp cha và một số thuộc tính, phương thức khác nên ta cần dùng phương thức nạp chồng <br>
2 ví  
php.demo
<br>
<br>

###Ngày 28/1 :
***
3 điều học được : <br>
-Để chỉ rõ nơi Class được viết, chúng ta sử dụng namespace để chỉ ra nơi chứa Class mà ta muốn dùng. <br>
-Để lưu và lấy dữ liệu trong PHP ta sử dụng lệnh json_decode và json_endcode <br>
  -UML của một class là bản thiết kế tổng quát của một Class, khi xây dựng Class ta chỉ cần thực hiện theo đúng những chỉ dẫn trong bản thiết kế ấy.
  Nó bao gồm các tên biến, kiểu dữ liệu,tên phương thức và các giá trị trả về của phương thức.
  <br>
2 ví dụ: <br>
demo.php
(namespace +json_decode +json_endcode)
<br>
<br>

###Ngày 27/1 :
***
3 điều học được : <br>
-Cú pháp của mảng asociative và cách duyệt mảng này. <br>
-Các câu lệnh để sắp xếp mảng và cách lấy ra key/value trong mảng <br>
-Câu lệnh include và require, điểm giống và khác nhau của chúng. <br>
-Cách khai báo, khởi tạo một lớp.Cách tạo một đối tượng từ một lớp  <br>
-Xây dựng được các phương thức của lớp và cách gọi các phương thức <br>
-Giới hạn mức độ truy cập của các thuộc tính trong lớp:public , private ,protect <br>
2 ví dụ: <br>
demo.php
***
Reflection require , include: <br>
Chung:Đều để import một file .php vào một file .php khác <br>
Riêng : <br>
-Require :khi bị lỗi, sẽ tạo ra lỗi nghiêm trọng và dừng tập lệnh <br>
-require_once:chỉ import đúng một lần,nếu sử dụng hai lệnh này thì lệnh thứ hai sẽ không được thực thi <br>
-include: khi bị lỗi sẽ chỉ tạo ra cảnh báo và tập lệnh sẽ tiếp tục được thực hiện <br>
-include_once: giống với require_once
  
  <br>
  <br>
  
  ###Ngày 26/1 :
***
3 điều học được : <br>
-LAMP là viết tắt của hệ thống bao gồm:Linux(server),Apache(webserver),MySQL(QTCSDL),PHP(ngôn ngữ lập trình) <br>
-Có 2 kiểu trang web:<br>
+Web tĩnh:được viết bằng HTML,CSS,JS,không có sự tương tác giữa Client và Server <br>
+Web động: được viết bằng các ngôn ngữ lập trình như PHP,JAVA,..có sự tương tác giữa Client-Server <br>
-Giao thức là cách thức giao tiếp giữa các bên.Loại hay dùng HTTP <br>
-Cú pháp của mảng asociative và cách duyệt mảng này. <br>
-Các câu lệnh để sắp xếp mảng và cách lấy ra key/value trong mảng <br>
-Câu lệnh include và require, điểm giống và khác nhau của chúng. <br>
2 ví dụ: <br>
demo.php
