    <div class="page-wrapper">
        <section class="explore-our-products">
            <div class="container-fluid">
                <div class="section-title text-center">
                    <div class="container">                       
                            <div class="col-md-4">
                                <div class="row">                                   
                                    <div class=" col-md-12 col-xs-12 col-sm-12">
                                        <div class="form-group has-search">
                                            <span class="fa fa-search form-control-feedback"></span>
                                            <input id="search" name="search" type="text" class="form-control getSingleProduct" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $(document).ready(function() {
                $("#search").autocomplete({ 
                    source: function(request, response) {
                        $.ajax({
                        url: "{{url('autocomplete')}}",
                        data: {
                                brand : request.term
                        },
                        dataType: "json",
                        success: function(result){
                        var resp = $.map(result,function(obj){
                                return obj.brand_name;
                        });  
                        response(resp);
                        }
                    });
                },
                minLength: 1
            });
            });
			</script>
