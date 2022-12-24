<section class="section" id="reservation">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6" style="top:50% ; left: 25%;">
                  
                  <form id="contact" action="/review" method="get">
                      @csrf
                      <div class="col-lg-12">
                        <h4>Questionnaire</h4>
                       </div>
                      <div class="form-group">
                          <label   for="description">1- how likely are you to recommend us to a friend ?</label>
                          <select class="form-control" name="q1" required="">
                              <option >It is highly unlikely</option>
                              <option >Very likely</option>
                          </select>
                      </div>
                      <hr>
                      <div class="form-group">
                        <label   for="description">2- How do you rate our services in terms of quality?</label>
                        <select class="form-control" name="q2" required="">
                            <option >very satisfied</option>
                            <option >satisfied</option>
                            <option >neutral</option>
                            <option >Not satisfied</option>
                            <option >very upset</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                      <label   for="description">3- How do you rate our services in terms of reliability?</label>
                      <select class="form-control" name="q3" required="">
                        <option >very satisfied</option>
                        <option >satisfied</option>
                        <option >neutral</option>
                        <option >Not satisfied</option>
                        <option >very upset</option>
                      </select>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label   for="description">4- How do you rate our services in terms of speed?</label>
                    <select class="form-control" name="q4" required="">
                      <option >very satisfied</option>
                      <option >satisfied</option>
                      <option >neutral</option>
                      <option >Not satisfied</option>
                      <option >very upset</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                  <label   for="description">5- How often do you use our products/services?</label>
                  <select class="form-control" name="q5" required="">
                      <option >Daily </option>
                      <option >Weekly </option>
                      <option > per month </option>
                  </select>
             </div>
              <hr>
              <div class="form-group">
                <label   for="description">Phone Number</label>
                <input type="text"  class="form-control" id="taskDescription" name="phone" required="">
            </div>
                      <div class="form-group">
                          <label   for="description">Review</label>
                          <textarea type="text"  class="form-control" id="taskDescription" name="review" required=""></textarea>
                      </div>
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      <div class="container">
                        <button  type="submit" class="btn btn-primary">Submit your quistionnaire</button>
                      </div>
                      
                  </form>
             
                </div>
            </div>
        </div>
</section>