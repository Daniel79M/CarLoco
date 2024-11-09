@extends('layout.base')

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-8 block-9 mb-md-5">
                <form action="#" class="bg-light p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    
                    
                    </div>
                    <div class="col-md-4">
                        <div class="row mb-5">
                            @foreach($mode_paiments as $mode_paiment)
                            <div class="col-md-12">
                                <div class="border w-100 p-4 rounded mb-2 d-flex">
                                    <div class="icon mr-3">
                                        <input type="checkbox" name="" id="" value="">
                                    </div>
                                    <p><span>{{ $mode_paiment->type }}</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
