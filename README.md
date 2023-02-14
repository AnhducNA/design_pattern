# DesignPatternsPHP

## Khái niệm

Design Pattern sử dụng nền tảng của lập trình hướng đối tượng, áp dụng các tính chất như tính kế thừa, hàm khởi tạo,
tính đa hình, ... để làm nên những kiến trúc phần mềm.

Một ví dụ điển hình về design pattern và được biết đến nhiều nhất tron PHP là cấu trúc MVC.

## Danh sách các mẫu design pattern

<strong>Creational</strong> : gồm 5 DP là Abstract Factory, Builder, Factory Method, Prototype và Singleton. Loại này cung cấp cách khởi tạo các đối tượng khác nhau, giúp tăng khả năng linh hoạt và tái sử dụng của code.

<strong>Structural</strong> : gồm 7 DP là Adapter, Bridge, Composite, Decorator, Facade, Flyweight và Proxy. Những pattern này giải thích cách làm thế nào để có thể tập hợp các đối tượng và các lớp vào 1 cấu trúc lớn cụ thể mà vẫn giữ được tính linh hoạt và hiêu quả.

<strong>Behavioral</strong> : gồm 11 DP là Chain of Responsibility, Command, Interpreter, Iterator, Mediator, Memento, Observer, State, Strategy, Template Method và Visitor. Những pattern này liên quan đến thuật toán và phân chia trách nhiệm giữa các đối tượng.


### Creational

1. Abstract Factory:

- <strong> Mục đích: </strong>  Là thiết kế mẫu hướng đối tượng trong việc thiết kế phần mềm, cung cấp một giao diện lớp có chức năng tạo ra một tập hợp các đối tượng liên quan hoặc phụ thuộc lẫn nhau mà không chỉ ra đó là những lớp cụ thể nào tại thời điểm thiết kế.[1] Mẫu thiết kế Abstract Factory đóng gói một nhóm những lớp đóng vai trò "sản xuất" (Factory) trong ứng dụng, đây là những lớp được dùng để tạo lập các đối tượng. Các lớp sản xuất này có chung một giao diện lập trình được kế thừa từ một lớp cha thuần ảo gọi là "lớp sản xuất ảo".

2. Builder:

