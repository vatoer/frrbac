$(document).ready(function () {
    console.log("from user.js");

    /*
    let requestUser = $.ajax({
            method: "GET",
            url: "/api/users",
            accept: "application/json",
            dataType: "json",
            data: {
                filter: "all"
            }
        })
        .done(function (msg) {
            alert("Data retrieve: " + msg);
        });
    */
    let dtUsers = $('#dt-users').DataTable({
        "language": {
            "loadingRecords": "Please wait - loading...",
         },
        "serverSide": true,
        "searchDelay": 1200,
        "ajax": {
            "url": "/api/realms",
            "type": "GET",
            //"dataSrc": "hydra:member",
            "headers": {
                "accept": "application/ld+json",
            },
            'dataFilter': function (data) {
                var json = JSON.parse(data);
                json.recordTotal = json['hydra:totalItems'];
                json.recordsFiltered = json['hydra:totalItems'];
                json.data = json['hydra:member'];

                return JSON.stringify(json);
            },
            "data": function (d) {
                //return d;
                console.log(d);
                d.page = 1 ;
                if(d.start>0){
                    d.page = 1 + ( d.start / d.length ) ;
                }

                if(d.search.value != null || d.search.value != "" ){
                    d.search_user = d.search.value;
                }

            }
        },
        "columns": [
            {
                "data": "name"
            },
            {
                "data": "domainName"
            },
            {
                "data": "loginType"
            },
            {
                "data": "allowManageUser"
            },
            {
                "data": "notes"
            }
        ],
    });

    function getDtUsersPage() {
        let page = dtUsers.page.info().page;
        return page;
    }

    $('#dt-users').on('page.dt', function () {
        var info = dtUsers.page.info();
        console.log('Showing page: ' + info.page + ' of ' + info.pages);
    });

});