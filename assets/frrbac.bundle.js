
//serialize object from from 
//usage $("#id-form").serializeObject()
$.fn.serializeObject = function() {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

/**
 * [makeAjaxCall description]
 * make ajax call with promise
 * @param  {[string]} url        [description]
 * @param  {[string]} methodType [description]
 * @param  {[Object]} data       [description]
 * @param  {[Object]} options       [description]
 * @return {[Promise]}            [description]
 * usage 
 *  makeAjaxCall(URL, method).then(resolve, reject, resolveOption, rejectOption );
 *  resolve and reject are functions wich can have Option
 */

 const makeAjaxCall = (url, methodType, data, options ) => {
    if (data === undefined) {
        data = {}
    }else{
        data = JSON.stringify(data);
    }
    if (options === undefined) {
        options = {}
    } else {
        if(options.resolve === undefined){
            options.resolve = {}
        }
        if(options.reject === undefined){
            options.reject = {}
        }
    } 
    const promiseObj = new Promise(function(resolve, reject) {
        var contentType = "application/ld+json";
        var dataType = "json";
        var accepts = "application/ld+json";

        switch (methodType) {
            case "POST":
                contentType = "application/ld+json";
                break;
            case "PATCH":
                contentType = "application/merge-patch+json";
                break;
            case "DELETE":
                break;
            default:
                methodType = "GET"
                break;
        }

        $.ajax({
            url: url,
            contentType: contentType ,
            method: methodType,
            data: data,
            dataType: dataType,
            headers:{
                "Accept": accepts
            }
        })
        .done(function(response) {
            resolve(response, options.resolve );
            console.log("request sent succesfully", url);
        })
        .fail(function(response) {
            reject(response, options.reject )
            console.log("request failed", url);
        })
    });
    return promiseObj;
}

const echo = function (){
    console.log("console echo");
}

export { makeAjaxCall , echo };