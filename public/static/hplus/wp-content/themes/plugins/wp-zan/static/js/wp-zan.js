function wpzan(post_id, user_id){
    var id = "#wp-zan-" + post_id,
        $zan = jQuery(id);

    if( $zan.hasClass('zaned') ){
        alert('浣犲凡缁忚禐杩囪繖绡囨枃绔犲暒~~');
        return;
    }

    if(post_id){
        $zan.addClass('zan-loader');
        jQuery.post(wpzan_ajax_url, {
            "action": "wpzan",
            "post_id": post_id,
            "user_id": user_id
        }, function(result) { //console.log(result);
            if( result.status == 200 ){
                var $count = $zan.find('span');
                $zan.addClass('zaned').removeClass('zan-loader');
                $count.text(result.count);
            }else{
                alert('浣犲凡缁忚禐杩囪繖绡囨枃绔犲暒~~');
            }
        }, 'json');
    }
}