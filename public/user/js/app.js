// Sử dụng jQuery để tạo Ajax request khi người dùng gửi comment
$('#comment-form').submit(function(event) {
    event.preventDefault(); // Ngăn không cho trang web tải lại khi submit form
  
    var form_data = $(this).serialize(); // Lấy dữ liệu từ form
    $.ajax({
      type: 'POST',
      url: 'add_comment.php', // Tệp PHP để xử lý comment được gửi
      data: form_data,
      success: function(response) {
        // Nếu comment đã được thêm thành công, hiển thị comment mới
        $('#comment-section').append(response);
        $('#name').val(''); // Xóa trường nhập tên
        $('#email').val(''); // Xóa trường nhập email
        $('#comment').val(''); // Xóa trường nhập comment
      }
    });
  });
  
  // S
  