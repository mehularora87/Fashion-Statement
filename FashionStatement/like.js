function vote(e){
	var totalVote = parseInt(document.getElementById("total").innerHTML);
	totalVote +=1;
	document.getElementById("total").innerHTML = totalVote;
	
	disableVote();
}

function disableVote(){
	document.getElementById("btnLike").disabled = true;
}