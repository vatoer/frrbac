import { echo, makeAjaxCall } from "../frrbac.bundle";

$(function () {
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

    const openFormNewRealm = function (){
        console.log('openFormNewRealm');
        $('#modal-forn-new-realm').modal('toggle');
        echo();
    }    

    const fnAfterCreateNewRealm = function(response,options){
        console.log(options);
        dtRealms.ajax.reload();
        $('#modal-forn-new-realm').modal('toggle');
    }

    const fnAOnErrorCreateNewRealm = function(response,options){
        console.log(options);
    }

    const saveRealm = function(){
        const data = $('#form-new-realm').serializeObject();
        const url = "/api/realms"; 
        const options = {
            resolve: {
                msg:"test aja"
            },
            reject: {
                msg:"test msg reject aja"
            }
        }

        console.log(data);
        makeAjaxCall(url,"POST",data).then(fnAfterCreateNewRealm, fnAOnErrorCreateNewRealm);

    }

    const dtRealms = $('#dt-users').DataTable({
        //backtick for multi line js
        "dom":`"<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>
            <'row'<'col-sm-12'tr>>" +
            <'row'<'col-sm-12 col-md-5'li><'col-sm-12 col-md-7'p>>`,
        "responsive": true,
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
                    d.search_realms = d.search.value;
                }

            }
        },
        buttons: [
            {
                text: 'New',
                action: function (e, dt, node, config) {
                    openFormNewRealm();         
                },
                attr: {
                    id: 'btn-new-realm',
                },
                className: 'btn-outline-primary',
                titleAttr: 'new-realms'
            }
        ],
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
        let page = dtRealms.page.info().page;
        return page;
    }

    $('#dt-users').on('page.dt', function () {
        var info = dtRealms.page.info();
        console.log('Showing page: ' + info.page + ' of ' + info.pages);
    });

    $("#btn-save-realms").on('click',function(){
        saveRealm();
    })

});