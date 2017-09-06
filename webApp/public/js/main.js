/**
 * ****************************************************************************
 * WEBAPP
 * Search Sản Phẩm
 *
 * Date       :   2017/01/10
 * Creater    :   Tên - Mã Nhân Viên – email@gmail.com
 *
 * 更新日       :
 * 更新者       :
 * 更新内容     :
 *
 * @package     :   MASTER
 * @copyright   :   Copyright (c) ANS-ASIA
 * @version     :   1.0.0
 * ****************************************************************************
 */

// Bước đầu tiên để chạy Jquery
$(document).ready(function() {  

    initialize();
    initEvents();
    // alert(1);
    
});

//Hàm khởi tạo các giá trị ở 1 màn hình

/**
 * initialize
 *
 * @author      :   Mã nhân viên - ngày tạo - create
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */
function initialize() {
    try {
                        

    } catch (e) {
        alert('initialize' + e.message);
    }
}


/**
 * initEvents
 *
 * @author      :   Mã nhân viên - ngày tạo - create
 * @author      :
 * @return      :   null
 * @access      :   public
 * @see         :   init
*/
function initEvents() {
    try {

        // click on vào đối tượng bất kỳ với class hoặc ID
        $(document).on('click','#search_products',function(){
            try {
                //
                search();
                
            } catch (e) {
                alert('Nội dung cần quang lỗi :' + e.message);
            }
        });

    } catch (e) {
        alert('initEvents ' + e.message);
    }
}

// Sự kiện ajax - Xử lý bất kỳ event nào để lấy dữ liệu từ server mà không cần load lại trang
// Lưu ý chỉ có một và duy nhất thằng ajax là nơi để giao tiếp dữ liệu từ client và server 
// Cách thức hoạt động


/**
 * search - tìm kiếm dữ liệu mà không cần load lại trang
 *
 * @author      :   Mã nhân viên - Ngày tạo - create
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */
function search() {
    try {
    	// Muốn giao tiếp dữ liệu thì phải có dữ liệu từ phía client (Front-End)
    	// biến data search là dữ liệu từ client cần đưa xuống
        var data_search     =  getData();
        //
        $.ajax({
        	// type là kiểu giao tiếp dữ liệu giữa client và server . Có 2 kiểu giao tiếp và POST và GET
            type        :   'POST',
            // đường dẫn ở server - Được khai báo ở Route controller của PHP(Phía Back-End)
            // route là thằng sinh ra để hướng dẫn đường đi
            url         :   '/products/search',
            // dữ liệu truyền xuống sẽ là 1 dạng json
            dataType    :   'json',
            // data là chính dữ liệu truyền xuống
            data        :   {
                //_token        : CSRF_TOKEN,
                 data     : data_search
            },
            success: function(data) {
                   
                },
                error : function(data) {
                   // closeWaiting();
                },
        });

    } catch (e) {
         alert('search' + e.message);
    }
}



/**
 * getData from form
 *
 * @author      :   Mã nhân viên - Ngày tạo hàm - create
 * @param       :
 * @return      :   null
 * @access      :   public
 * @see         :   init
 */
function getData() {
    try {
    		// Lấy dữ liệu bình thường như 1 biến
    		var data 	=	$('.search-query').val();
    		console.log(data);
            return data;
    } catch (e) {
         alert('getData' + e.message);
    }
}





