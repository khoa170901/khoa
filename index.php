<!DOCTYPE html>
<html>
<head>
    <title>List of school</title>
    <link rel="stylesheet" href="maincss.css">
</head>
<body>
    <div id="top-bar" align="center">List school</div>
			<div align="center" class="tab">
  				<button class="tablinks" onclick="openCity(event, 'FPT')">FPT</button>
  				<button class="tablinks" onclick="openCity(event, 'UEH')">UEH</button>
  				<button class="tablinks" onclick="openCity(event, 'HUFI')">HUFI</button>
				<button class="tablinks" onclick="openCity(event, 'BK')">BK</button>
				<button class="tablinks" onclick="openCity(event, 'IUH')">IUH</button>
			</div>
    <div id="FPT" class="tabcontent">
        <h3>FPT</h3>
        <img class = "featured-image" src= "tải xuống.png" >
		<p>
		Học ngành gì, trường nào mới đúng đắn và phù hợp với bản thân? Hãy cùng nghe những kinh nghiệm xương máu đến từ các “tiền bối” của trường Đại học FPT Đà Nẵng dành cho các bạn học sinh 2k3 nhé!
		</p>
		<p>
		Hồ Thị Lan Anh, “nàng thơ” với nét đẹp trong sáng này hiện đang là sinh viên K16 ngành Marketing trường Đại học FPT Đà Nẵng. Lựa chọn Đại học FPT ngay từ lúc còn học cấp 3, Lan An ấn tượng với tính sáng tạo và sự năng động của ngôi trường này.
		</p>
		<p>
		Sau một thời gian trải nghiệm, cô nàng đã có những đánh giá khách quan về trường F: “Điều làm mình ấn tượng nhất có lẽ là chất lượng giảng dạy của trường, mình được học với giáo viên người nước ngoài, mọi người đều rất thân thiện và nhiệt tình, hơn nữa chương trình học rất chuyên nghiệp và thú vị.”
		</p>
    </div>
    
    <div id="UEH" class="tabcontent">
        <h3>UEH</h3>
        <img class = "featured-image" src= "ueh.png" >
		<p>Chuyên ngành Quản trị Công nghệ và Đổi mới sáng tạo đào tạo sinh viên trở thành nhà quản trị/quản lý hiểu, biết và áp dụng công nghệ trong kinh doanh dựa trên đổi mới sáng tạo. Trong đó, những ứng dụng công nghệ mới (AI, Blockchain, Big Data) được ưu tiên giảng dạy nhằm giúp người học có thể thích nghi nhanh chóng trong công việc và quản trị doanh nghiệp. Ngành học này đào tạo năng lực lãnh đạo trong quá trình chuyển đổi số của doanh nghiệp dựa trên kết hợp học công nghệ và tổ chức hoạt động đổi mới sáng tạo liên tục trong hoạt động kinh doanh đang thay đổi nhanh chóng.</p>
    </div>

    <div id="HUFI" class="tabcontent">
        <h3>HUFI</h3>
        <img class = "featured-image" src= "HUFI.png" >
		<p>Kỳ thi tốt nghiệp trung học phổ thông năm 2021 sẽ có 5 bài thi trong đó có 3 bài thi độc lập là Toán, Ngữ văn, Ngoại ngữ và 2 bài thi tổ hợp là Khoa học tự nhiên (gồm các môn Vật lý, Hóa học, Sinh học), Khoa học xã hội (gồm các môn Lịch sử, Địa lý, Giáo dục công dân).</p>
    </div>

    <div id="BK" class="tabcontent">
        <h3>BK</h3>
        <img class = "featured-image" src= "images.png" >
		<p>Ngành Kỹ thuật Dầu khí thuộc khoa Kỹ thuật Địa chất - Dầu khí – Trường ĐH Bách khoa – ĐHQG-HCM là đơn vị đào tào kỹ sư chuyên ngành kỹ thuật dầu khí lớn nhất tại phía Nam. Ngoài chương trình đào tạo chính qui, trường cũng là cơ sở đào tạo trình độ tiến sĩ ngành Kỹ thuật Dầu khí đầu tiên của Việt Nam (từ năm 2013). Đến nay, trường đã đào tạo thành công gần 2.000 kỹ sư, thạc sĩ, tiến sĩ cho ngành Dầu khí của Việt Nam và thế giới</p>
    </div>

    <div id="IUH" class="tabcontent">
        <h3>IUH</h3>
        <img class = "featured-image" src= "IH.png" >
		<p>Máy tính điện tử là phần xử lý trung tâm cốt lõi cho các thiết bị điện tử, Kỹ thuật máy tính là lĩnh vực thiết kế các hệ thống xử lý điều khiển ứng dụng trong hầu hết các thiết bị điện tử như: máy tính, điện thoại di động, xe hơi, các bộ điều khiển trong thiết bị dân dụng, thiết bị y tế, các robot công nghiệp, hay các hệ thống thông minh.</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
    <script type="text/javascript"> 
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
	
<?php
	?>
</body>
</html>
