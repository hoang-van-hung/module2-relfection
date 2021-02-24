
# Module2-relfection
# Ngày 24/2/2021
Phân tích và thiết kế CSDL là các thao tác được thực hiện để tìm ra một mô hình CSDL trong một tình huống nhất định, kết quả trả về là một bản thiết kế CSDL.Bản thiết kế này thường được biểu diễn dưới dạng một lưu đồ thực thể quan hệ ERD, dựa vào bản thiết kế CSDL này ta có thể viết các câu lệnh để tạo ra bản thiết kế CSDL đó. <br>
<ol>
     Các bước phân tích và thiết kế CSDL :
     <li>Xác định mục đích của CSDL</li>
     <li>Tìm hiểu và tổ chức các thông tin cần lưu trữ.</li>
     <li>Phân chia thông tin vào các bảng</li>
     <li>Xác định các trường dữ liệu của bảng.</li>
     <li>Xác định khóa chính của bảng</li>
     <li>XÁc định mối quan hệ giữa các bảng.</li>
     <li>Làm mịn thiết kế</li>
     <li>Áp dụng các quy tắc chuẩn hóa</li>
</ol>
Khi thiết kế CSDL, ta cần tuân thủ các chuẩn hóa bao gồm : chuẩn hóa 1NF, chuẩn hóa 2NF, chuẩn hóa 3NF.Đồng thời cũng phải tuân thủ quy tắc về tính toàn vẹn gồm :
Quy tắc của Entity : khóa chính không được phép NULL, nếu không thì nó không thể xác định được duy nhất cho row dữ liệu.Đối với composite key được tạo bởi nhiều cột thì tất cả các column không được phép NULL( các RDBMS kiểm tra và tuân thủ nguyên tắc này) ;
Quy tắc của tham chiếu : Mỗi giá trị của FOREIGN KEY phải khớp với giá trị khóa chính trong table được tham chiếu, có thể chèn một dùng với FOREIGN KEY  trong bảng con chỉ khi nó tồn tại trong bảng cha. Nếu trong bảng cha value của khóa thay đổi thì tất cả các dòng của FOREIGN KEY  trong các bảng con cũng phải được xử lý tương ứng.Có thể thiết lập cho việc kiểm tra và đảm bảo tính toàn vẹn của tham chiếu dữ liệu giữa các bảng.;
Quy tắc của nghiệp vụ logic : Bên cạnh hai quy tắc trên có thể có tính toàn vẹn liên quan đến business logic.;
<br> <br>
# Ngày 23/2/2021
Hệ quản trị cơ sở dữ liệu(Database Management System )là hệ thống được thiết kế quản lí một khối lượng dữ liệu nhất định một cách tự động và có trật tự. Các hành động quản lý bao gồm chỉnh, sửa, xóa, lưu thông tin và tìm kiếm trong một nhóm dữ liệu nhất định. 
Nói một cách khác hệ quản trị CSDL là hệ thống tự động giúp người dùng kiểm soát các thông tin, tạo, cập nhật và duy trì các CSDL. Trong đó có 2 thành phần chính trong một hệ quản trị CSDL là bộ xử lí yêu cầu và bộ quản lí dữ liệu.<br>
Hệ quản trị CSDL quan hệ là một CSDL được xây dựng trên mô hình dữ liệu quan hệ(renation model of data), nó được tổ chức trong các bảng (table - quan hệ relation). Các thành phần có các quan hệ ràng buộc với nhau. <br>

Sự khác biệt chính giữa DBMS và RDBMS
<ul>
     <li>DBMS theo mô hình điều hướng trong khi RDBMS theo mô hình quan hệ nơi dữ liệu được lưu trữ dưới dạng bảng và tồn tại mối quan hệ giữa các bảng đó.</li>
     <li>Trong DBMS, các bản sao dữ liệu giống nhau có thể được lưu trữ ở nhiều nơi nhưng trong RDBMS dữ liệu dư thừa được loại bỏ bằng cách sử dụng chuẩn hóa.</li>
     <li>Vì nhiều bản sao được lưu trữ tại các vị trí khác nhau trong DBMS, rất khó để sửa đổi cùng một tệp tại các vị trí khác nhau. Mặt khác, vì có sự trùng lặp dữ liệu không đáng kể trong RDBMS, nên rất dễ để thực hiện các thay đổi trong dữ liệu.</li>
     <li>Dữ liệu được truy cập nhanh hơn trong trường hợp RDBMS. Ngược lại, DBMS tiêu tốn nhiều thời gian hơn trong việc truy cập dữ liệu.</li>
     <li>Chỉ các ràng buộc toàn vẹn được sử dụng trong DBMS trong khi RDBMS sử dụng các ràng buộc dựa trên lược đồ và phụ thuộc dữ liệu.</li>
     <li>Các khóa và chỉ mục không được sử dụng trong DBMS. Ngược lại, trong RDBMS, chúng được sử dụng để thiết lập mối quan hệ giữa các bảng.</li>
     <li>DBMS không áp đặt các ràng buộc đối với các thuộc tính ACID. Ngược lại, RDBMS áp đặt các ràng buộc để giữ các thuộc tính ACID.</li>
     <li>Dbase, Microsoft Access, LibreOffice Base và ForPro là một số ví dụ về DBMS. Ngược lại, có một số RDBMS được sử dụng rộng rãi như SQL Server, Oracle, Mysql, SQLite,...</li>
</ul>
Các chuẩn hóa :
-Chuẩn thứ nhất 1NF một bảng được gọi là thuộc chuẩn 1NF nếu giá trị của mỗi trường bao gồm một giá trị, không phải là một danh sách giá trị.Trường này được gọi là atomic.1NF cũng nghiêm cấm lặp lại các nhóm columns như item1, item2,...Thay vào đó nên tạo một bảng khác sử dụng mối quan hệ one-to-many. <br><br>
Chuẩn thứ hai 2NF một bảng được gọi là thuộc chuẩn 2NF nếu nó đã thuộc 1NF và mỗi cột không phải là khóa chính không phụ thuộc hoàn toàn vào khóa chính.Hơn nữa, nếu khóa chính được tạo ra từ nhiều cột, mỗi cột không phải là khóa chính sẽ phụ thuộc vào toàn bộ tập hợp và không phải là một phần của nó. <br><br>
Chuẩn thứ ba 3NF nếu nó là 2NF và các cột không phải là khóa là độc lập với nhau.Nói cách khác, các cột không phải là khóa là phụ thuộc vào khóa chính, chỉ khóa chính và không gì khác.<br><br>

<br> <br>
# Ngày 22/2/2021
Biểu thức chính quy để giúp kiểm tra dữ liệu người dùng nhập có thỏa mãn những yêu cầu đưa ra,nó cũng giúp tìm kiếm cũng như thay thế các chuỗi tùy chọn
Sử dụng biểu thức chính quy giúp cho code đơn giản hơn, tăng hiệu suất chương trình lên nhiều lần.<br>
PHP cung cấp nhiều hàm có sẵn để phục vụ việc thực hiện biểu thức chính quy như preg_match, preg_match_all , preg_split, preg_replace.<br>
Cú pháp  :<br>
     $Hàm_PHP($pattern, $str, &$matches); <br><br>
Trong đó:     
     $pattern ='/Biểu thức chính quy/' <br>
     $str là chuỗi cần kiểm tra <br>
     $matches là kết quả trả về, đây là một tham số tùy chọn, truyền vào ở dạng tham chiếu.<br><br>
Tùy theo từng điều kiện đưa ra, ta sử dụng kết hợp các Mecharacters để đưa ra biểu thức chính quy thỏa mãn yêu cầu ban đầu.
<br><br>
# Ngày 19/2/2021 :
<ul>
   <li>Ngoại lệ là những lỗi phát sinh trong quá trình thực thi.</li>
   <li>Xử lý ngoại lệ là khả năng bắt và giải quyết ngoại lệ  bằng sử dụng "catch", khả năng tách logic xử lý ngoại lệ trong một hàm ra khỏi phần còn  lại của hàm sử dụng "try", cũng là khả năng tạo và ném ngoại lệ sử dụng "throw".</li>
   <li>Hàm Try/Catch dùng để xử lý ngoại lệ, để chương trình thực hiện theo nghiệp vụ mình mong muốn.Trong đó mã liên quan đến thuật toán nằm trong khối "try", mã giải quyết lỗi nằm trong khối "catch".</li>
   <li>Các lỗi thường gặp: lỗi cú pháp, lỗi khi chạy chương trình, lỗi về tính logic cấu trúc của chương trình.</li>
   <li>Ngoài các hàm xử lý ngoại lệ có sẵn, người dùng có thể tạo ra những hàm xử lý ngoại lệ riêng biệt với những tác dụng khác nhau, tùy theo nghiệp vụ.</li>
</ul>
<br><br>

# Ngày 5/2/2021
-SPL là bộ thư viên chuẩn của PHP, nó gồm tập hợp các interface, abstract class nhằm giải quyết các bài toán phổ biên.
>Các thành phần của SPL :
>> - Predefined Constants là danh sách các hằng số :số pi, số E,...
>> - Datastructures chứa danh sách các lớp co khả năng làm việc với cấu trúc, dữ liệu khác nhau LinkList, Stack, Queue, Heaps,...
>> - Interator: Chứa các lớp cho phép có khả năng thực hiện các phép lặp để duyệt các cấu trúc khác nhau tùy vào cấu trúc dữ liệu.
>> - Danh sách các Interface
>> - Exception là danh sách điều khiển các lớp ngoại lệ
>> - File Handling cung cấp các lớp làm việc với file trong hệ thống.
>> - SPL Funtions cung cấp các hàm hỗ trợ cần thiết.
>> - Miscellaneous Classes và Interface. 
<br> <br>
> -Các loại cấu trúc dữ liệu:
> -PHP DATASTRUCTURES <br>
> - SPL là bộ thư viện chuẩn của PHP.Cung cấp nhiều cấu trúc dữ liệu tiêu chuẩn để chúng ta có thể sử dụng ngay trong ứng dụng của mình.Các dữ liệu này được phân nhóm dựa vào các hình thức triển khai của chúng cũng như căn cứ vào cách sử dụng trong thực tê.
> các cấu trúc dữ liệu trong SPL:
>> - Doubly Linked List
>> - Heaps
>> - Arrays
>> - Map
> - DoublyLinkedList:
>> - Là một danh sách liên kết đôi, các node được liên kết với nhau theo hai hướng.
>> - PHP cung cấp sẵn các lớp SplDoublyLinkedList là SplStack và SplQueue
> - HEAP là một dạng cấu trúc gần như Tree, trong đó mỗi node có giá trị lớn hơn hoặc bằng các node con của nó.
>> -PHP cung cấp sẵn các lớp thuộc Heaps bao gồm SplHeap và SplPriorityQueue.Trong SplHeap có SplMaxHeap và SplMinHeap
> - ARRAYS là cấu trúc dữ liệu trong đó lưu trữ các phần tử theo hình thức liên tiếp nhau , truy cập dựa theo chỉ số.
>> - PHP cung cấp lớp có sẵn SplFixedArray
>> - Lưu ý cấu trúc Arrays khác khái niệm mảng trong PHP.Mảng trong PHP được triển khai theo hình thức Hashtable có trật tự.
> - MAP là cấu trúc dữ liệu trong đó các phần tử được quản lý theo cặp key-value.
>> - PHP cung cấp lớp SplObjectStorage
>> - Mảng trong PHP cũng có thể coi là cấu trúc Map.Trong đó key có kiểu dữ liệu là int hoặc string.

<br><br>
# ngay 4/2/2021
STACK là một kiểu cấu trúc dữ liệu, nó hoạt động giống như một ngăn xếp, hoạt động theo nguyên tắc First in-First out.Nó có thể là mảng hoặc là một LinkedList để lưu trữ các phần tử. 

<ul>
   Các thao tác cơ bản :
  <li>push : Lưu trữ một phần tử trong ngăn xếp</li>
  <li>pop : Xóa một phần tử trong ngăn xếp</li>
  <li>peek :Lấy dữ liệu của một phần tử trên cùng ngăn xếp không xóa phần tử</li>
  <li>isEmpty : Kiểm tra rỗng</li>
  <li>isFull : Kiểm tra xem ngăn xếp có đầy hay không</li>
  <li></li>
</ul>
QUEUE là một cấu trúc dữ liệu trừu tượng, là một cái gì đó tương tự như hàng đợi trong đời sống, tuân thủ theo nguyên lí First in-First out.
<ul>
Các thao tác cơ bản: 
  <li>enqueue : Thêm hay lưu trữ một phần tử vào trong hàng đợi</li>
  <li>dequeue : Lấy phần tử từ đầu hàng đợi, không xóa phần tử này</li>
  <li>isEmpty : kiểm tra rỗng</li>
  <li>isFull : Kiểm tra xem ngăn xếp có đầy hay không</li>
  <li></li>
</ul>
TREE là một cấu trúc dữ liệu được sử dụng rộng rãi gồm một tập hợp các nút (node) được liên kết với nhau theo quan hệ cha-con. <br>
Gồm các loại :
-Cây nhị phân(Binay Tree) là cây rỗng hoặc là cây mà mỗi node có tối đa 2 node con.
-Cây nhị phân tìm kiếm(Binay Search Tree) là một cây nhị phân mà tại mỗi node thì phần tử ở node đó lớn hơn các phần tử ở cây con bên trái, nhỏ hơn các phần tử ở cây con bên phải. <br>
-Các hoạt động cơ bản :
<ul>
  <li>Chèn</li>
  <li>Tìm kiếm</li>
  <li>Duyệt tiền thứ tự</li>
  <li>Duyệt trung thứ tự</li>
  <li>Duyệt hậu thứ tự</li> 
</ul>
<br><br><br>
#

#Ngay 3/2/2021 :
>Cấu trúc giữ liệu là hình thức tổ chức một nhóm dữ liệu, mục đích là lưu trữ dữ liệu và cung cấp các phương thức để thao tác với dữ liệu
>Lựa chon cấu trúc dữ liệu và thuật toán phù hợp là rất quan trọng đối với hiệu năng của ứng dụng.
>>Các cấu trúc dữ liệu thông dung:
<ul>
  <li>Array : Mảng</li>
  <li>Set : Nhóm các phần tử không trùng nhau</li>
  <li>List :Nhóm các phần tử có thể trùng nhau</li>
  <li>Stack : Nhóm các phần tử theo trật tự vào trước ra sau</li>
  <li>Queue : Nhóm các phần tử theo trật tự vào trước ra trước</li>
  <li>Map : Lưu trư theo cặp key->value </li>
  <li>Tree: lưu trữ phần tử theo mối quan hệ cha - con </li>
  <li>Graph: Lưu trữ phần tử theo mối quan hệ dạng lưới </li>
</ul>
ARRAY LIST là một danh sách, lưu trữ dữ liệu trong mảng, có thể thay đổi kích thước.Nó có ưu điểm là truy xuất các phần tử nhanh nhưng có khuyết điểm là thêm hoặc xóa các phần tử chậm. <br>
LINKEDLIST có các phần tử liên kết với nhau thông qua tham chiếu. Nó truy xuất các phần từ ngẫu nhiên chậm nhưng bù lại việc thêm và xóa các phần tử lại cực nhanh.
Cấu trúc : Nó hoạt động trên cơ chế liên kết giữa các node.Mỗi node chứa dữ liệu của node đó và liên kết đến node khác.<br>
Các kiểu :
<ul>
  <li>Singly Linked List: Một node chỉ có một liên kết đến node phía sau.Node cuối trỏ đến NULL</li>
  <li>Circular Singly LinkedList: Một node chỉ có một liên kết đến node phía sau.Node cuối cùng trỏ đến node đầu tiên</li>
  <li>Doubly Linked List: Một node chứa hai liên kết trỏ đến phần tử đứng trước và sau nó.Phần tử trước của phần tử đầu tiên là NULL, phần tử sau của phần tử sau là NULL</li>
  <li>Circular Doubly Linked List: tương tự như Doubly Linked List chỉ khác là node đầu tiên v</li>
</ul>


<br> <br>
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
  <li>L-Liskov substitution principle :C</li>
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
