exports.problem = function (map) {
    if (map[0] === '*') {
    	return 0
    } else if(map[0] === '*A'){
    	return 1
    }else{
    	return 2
    }

};
