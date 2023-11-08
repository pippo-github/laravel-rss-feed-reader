const getKey = (e) =>{
    if(e.keyCode == 18) {
        console.log("key == Alt"); 
        return true;
    }
    return false;
}