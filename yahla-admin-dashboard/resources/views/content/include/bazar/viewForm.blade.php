
<div id="viewForm{{ $bazar->id }}">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-7">
                    <div class="swiper swiper-with-arrows">

                        <div class="swiper-wrapper">
                            @foreach($bazar->image as $img)
                               <div class="swiper-slide" style="background-image:url('{{ asset('storage/'.$img) }}')"></div>
                           @endforeach
                        </div>
                        <div class="swiper-button-next swiper-button-white custom-icon">
                        </div>
                        <div class="swiper-button-prev swiper-button-white custom-icon">
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <table class="table table-borderless">
                        <h5 class="text-center">{{ $bazar->title ?? '' }}</h5>
                        <thead>
                            <tr>
                                <th>Price</th>
                                <td>{{ $bazar->price ?? '' }}$</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $bazar->status == 0 ? 'Unpublish' : 'Publish' }}</td>
                            </tr>
                            <tr>
                                <th>Warranty</th>
                                <td>{{ $bazar->warranty == 0 ? 'No' : 'Yes' }}</td>
                            </tr>
                        </thead>
                      
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>



