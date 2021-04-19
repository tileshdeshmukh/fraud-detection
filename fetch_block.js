
function blk(){
    console.log("block")  
fetch("https://localhost:3000/api/100").then((response)=>{
    console.log(response.json());    
}).then((data)=>{
    console.log(data));
})
}

