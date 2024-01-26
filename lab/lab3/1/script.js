function CheckForm(){
    let id = document.getElementById("IdCard").value;
    let title = document.getElementById("Title").value;
    let firstName = document.getElementById("FirstName").value;
    let lastName = document.getElementById("LastName").value;
    let address = document.getElementById("Address").value;
    let subDistrict = document.getElementById("SubDistrict").value;
    let district = document.getElementById("District").value;
    let province = document.getElementById("Province").value;
    let zip = document.getElementById("Zip").value;

    if(id.length != 13){
        alert("รหัสบัตรประชาชนไม่ถูกต้อง");
        return false;
    }
    else if(title == "00"){
        alert("กรุณากรอกคำนำหน้าชื่อ");
        return false;
    }
    else if(firstName.length <= 2 && lastName.length >= 20){
        alert("กรุณากรอกชื่อ");
        return false;
    }
    else if(lastName.length <= 2 && lastName.length >= 30){
        alert("กรุณากรอกนามสกุล");
        return false;
    }
    else if(address.length < 15){
        alert("กรุณากรอกที่อยู่");
        return false;
    }
    else if(subDistrict.length < 2){
        alert("กรุณากรอกตำบล/แขวง");
        return false;
    }
    else if(district.length < 2){
        alert("กรุณากรอกอำเภอ/เขต");
        return false;
    }
    else if(province == ""){
        alert("กรุณากรอกจังหวัด");
        return false;
    }
    else if(zip.length != 5){
        alert("กรุณากรอกรหัสไปรษณีย์");
        return false;
    }
    else{
        alert("ส่งข้อมูลเรียบร้อย");
        return true;
    }
}