@extends('layouts.admin')


@section('content')
<i class="fa-regular fa-bell fa-xl d-flex justify-content-end mt-5" style="color: #000000;"></i>
<div class="container bg-white py-4 mt-2">
    <div class="row">
        <div class="col-md-6">
            <h2>Ciao User</h2>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h4>Le tue prenotazioni</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-outline-dark btn-transparent m-3">In Partenza (0)</button>
        </div>
        <div class="col">
            <button type="button" class="btn btn-outline-dark btn-transparent m-3">Persone ospitate al momento (0)</button>
        </div>
    </div>
</div>
<div class="container oggidomani bg-light ">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
            <i class="fa-solid fa-paper-plane" style="color: #000000;"></i>
            <h4>Nessun ospite in partenza oggi o domani</h4>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
      <div class="col">
        <h4> Appartamenti</h4>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
        </div>
        <p>Appartamenti disponibili: 40%</p>
      </div>
      <div class="col">
        <h4> Prenotazioni</h4>
        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
        <p>Prenotazioni effettuate: 75%</p>
      </div>
      <div class="col">
        <h4> Occupazione</h4>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
        </div>
        <p>Occupazione attuale: 60%</p>
      </div>
    </div>
  </div>


<div class="container d-flex justify-content-between mt-5 mb-5">
  <div class="plan-card">
    <h2>Extend<span>For business services</span></h2>
    <div class="etiquet-priceex">
        <p>9,99</p>
        <div></div>
    </div>
    <div class="benefits-list">
        <ul>
            <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                </svg><span>Sponsoring</span></li>
            <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                </svg><span>Price 60% </span></li>
                <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
              </svg><span>More visibility</span></li>

        </ul>
    </div>
    <div class="button-get-plan">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-rocket">
                <path d="M156.6 384.9L125.7 353.1C117.2 345.5 114.2 333.1 117.1 321.8C120.1 312.9 124.1 301.3 129.8 288H24C15.38 288 7.414 283.4 3.146 275.9C-1.123 268.4-1.042 259.2 3.357 251.8L55.83 163.3C68.79 141.4 92.33 127.1 117.8 127.1H200C202.4 124 204.8 120.3 207.2 116.7C289.1-4.07 411.1-8.142 483.9 5.275C495.6 7.414 504.6 16.43 506.7 28.06C520.1 100.9 516.1 222.9 395.3 304.8C391.8 307.2 387.1 309.6 384 311.1V394.2C384 419.7 370.6 443.2 348.7 456.2L260.2 508.6C252.8 513 243.6 513.1 236.1 508.9C228.6 504.6 224 496.6 224 488V380.8C209.9 385.6 197.6 389.7 188.3 392.7C177.1 396.3 164.9 393.2 156.6 384.9V384.9zM384 167.1C406.1 167.1 424 150.1 424 127.1C424 105.9 406.1 87.1 384 87.1C361.9 87.1 344 105.9 344 127.1C344 150.1 361.9 167.1 384 167.1z"></path>
            </svg>
            <span>START PROJECT</span>
        </a>
    </div>
</div>


<div class="plan-card">
  <h2>Standard<span>Sponsoring Service</span></h2>
  <div class="etiquet-pricest">
      <p>2.99</p>
      <div></div>
  </div>
  <div class="benefits-list">
      <ul>
          <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
              </svg><span>Sponsoring</span></li>
              <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
            </svg><span>More visibility</span></li>
            <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
              <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
          </svg><span>no sale price</span></li>
      </ul>
  </div>
  <div class="button-get-plan">
      <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-rocket">
              <path d="M156.6 384.9L125.7 353.1C117.2 345.5 114.2 333.1 117.1 321.8C120.1 312.9 124.1 301.3 129.8 288H24C15.38 288 7.414 283.4 3.146 275.9C-1.123 268.4-1.042 259.2 3.357 251.8L55.83 163.3C68.79 141.4 92.33 127.1 117.8 127.1H200C202.4 124 204.8 120.3 207.2 116.7C289.1-4.07 411.1-8.142 483.9 5.275C495.6 7.414 504.6 16.43 506.7 28.06C520.1 100.9 516.1 222.9 395.3 304.8C391.8 307.2 387.1 309.6 384 311.1V394.2C384 419.7 370.6 443.2 348.7 456.2L260.2 508.6C252.8 513 243.6 513.1 236.1 508.9C228.6 504.6 224 496.6 224 488V380.8C209.9 385.6 197.6 389.7 188.3 392.7C177.1 396.3 164.9 393.2 156.6 384.9V384.9zM384 167.1C406.1 167.1 424 150.1 424 127.1C424 105.9 406.1 87.1 384 87.1C361.9 87.1 344 105.9 344 127.1C344 150.1 361.9 167.1 384 167.1z"></path>
          </svg>
          <span>START PROJECT</span>
      </a>
  </div>
</div>


<div class="plan-card">
  <h2>Medium<span>Sponsoring Service</span></h2>
  <div class="etiquet-pricemd">
      <p>5.99</p>
      <div></div>
  </div>
  <div class="benefits-list">
      <ul>
          <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
              </svg><span>Sponsorin</span></li>
          <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
              </svg><span>More visibility</span></li>
              <li><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                <path d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
            </svg><span>20% off</span></li>

      </ul>
  </div>
  <div class="button-get-plan">
      <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-rocket">
              <path d="M156.6 384.9L125.7 353.1C117.2 345.5 114.2 333.1 117.1 321.8C120.1 312.9 124.1 301.3 129.8 288H24C15.38 288 7.414 283.4 3.146 275.9C-1.123 268.4-1.042 259.2 3.357 251.8L55.83 163.3C68.79 141.4 92.33 127.1 117.8 127.1H200C202.4 124 204.8 120.3 207.2 116.7C289.1-4.07 411.1-8.142 483.9 5.275C495.6 7.414 504.6 16.43 506.7 28.06C520.1 100.9 516.1 222.9 395.3 304.8C391.8 307.2 387.1 309.6 384 311.1V394.2C384 419.7 370.6 443.2 348.7 456.2L260.2 508.6C252.8 513 243.6 513.1 236.1 508.9C228.6 504.6 224 496.6 224 488V380.8C209.9 385.6 197.6 389.7 188.3 392.7C177.1 396.3 164.9 393.2 156.6 384.9V384.9zM384 167.1C406.1 167.1 424 150.1 424 127.1C424 105.9 406.1 87.1 384 87.1C361.9 87.1 344 105.9 344 127.1C344 150.1 361.9 167.1 384 167.1z"></path>
          </svg>
          <span>START PROJECT</span>
      </a>
  </div>
</div>
</div>



<style>
  /* CARD FOR SPONOR  */
  .plan-card {
  background: #fff;
  width: 15rem;
  padding-left: 2rem;
  padding-right: 2rem;
  padding-top: 10px;
  padding-bottom: 20px;
  border-radius: 10px;
  border-bottom: 4px solid #000446;
  border: 2px solid #0DCAF0;
  box-shadow: 0 6px 30px rgba(207, 212, 222, 0.3);
  font-family: "Poppins", sans-serif;
}

.plan-card h2 {
  margin-bottom: 15px;
  font-size: 27px;
  font-weight: 600;
}

.plan-card h2 span {
  display: block;
  margin-top: -4px;
  color: #4d4d4d;
  font-size: 12px;
  font-weight: 400;
}

.etiquet-pricest  {
  position: relative;
  background: #0DCAF0;
  width: 14.46rem;
  margin-left: -0.65rem;
  padding: .2rem 1.2rem;
  border-radius: 5px 0 0 5px;
}

.etiquet-pricemd  {
  position: relative;
  background: #0DCAF0;
  width: 14.46rem;
  margin-left: -0.65rem;
  padding: .2rem 1.2rem;
  border-radius: 5px 0 0 5px;
}
.etiquet-priceex  {
  position: relative;
  background: #0DCAF0;
  width: 14.46rem;
  margin-left: -0.65rem;
  padding: .2rem 1.2rem;
  border-radius: 5px 0 0 5px;
}

.etiquet-pricest p {
  margin: 0;
  padding-top: .4rem;
  display: flex;
  font-size: 1.9rem;
  font-weight: 500;
}
.etiquet-priceex p {
  margin: 0;
  padding-top: .4rem;
  display: flex;
  font-size: 1.9rem;
  font-weight: 500;
}
.etiquet-pricemd p {
  margin: 0;
  padding-top: .4rem;
  display: flex;
  font-size: 1.9rem;
  font-weight: 500;
}

.etiquet-priceex p:before {
  content: "$";
  margin-right: 5px;
  font-size: 15px;
  font-weight: 300;
}

.etiquet-pricemd p:before {
  content: "$";
  margin-right: 5px;
  font-size: 15px;
  font-weight: 300;
}
.etiquet-pricest p:before {
  content: "$";
  margin-right: 5px;
  font-size: 15px;
  font-weight: 300;
}

.etiquet-pricest p:after {
  content: "/ for 24 hours ";
  margin-left: 5px;
  font-size: 15px;
  font-weight: 300;
}
.etiquet-priceex p:after {
  content: "/ for 144 hours ";
  margin-left: 5px;
  font-size: 15px;
  font-weight: 300;
}
.etiquet-pricemd p:after {
  content: "/ for 72 hours ";
  margin-left: 5px;
  font-size: 15px;
  font-weight: 300;
}



.etiquet-pricemd div {
  position: absolute;
  bottom: -23px;
  right: 0px;
  width: 0;
  height: 0;
  border-top: 13px solid #0DCAF0;
  border-bottom: 10px solid transparent;
  border-right: 13px solid transparent;
  z-index: -6;
}
.etiquet-priceex div {
  position: absolute;
  bottom: -23px;
  right: 0px;
  width: 0;
  height: 0;
  border-top: 13px solid #0DCAF0;
  border-bottom: 10px solid transparent;
  border-right: 13px solid transparent;
  z-index: -6;
}
.etiquet-pricest div {
  position: absolute;
  bottom: -23px;
  right: 0px;
  width: 0;
  height: 0;
  border-top: 13px solid #0DCAF0;
  border-bottom: 10px solid transparent;
  border-right: 13px solid transparent;
  z-index: -6;
}

.benefits-list {
  margin-top: 16px;
}

.benefits-list ul {
  padding: 0;
  font-size: 14px;
}

.benefits-list ul li {
  color: #4d4d4d;
  list-style: none;
  margin-bottom: .2rem;
  display: flex;
  align-items: center;
  gap: .5rem;
}

.benefits-list ul li svg {
  width: .9rem;
  fill: currentColor;
}

.benefits-list ul li span {
  font-weight: 300;
}

.button-get-plan {
  display: flex;
  justify-content: center;
  margin-top: 1.2rem;
}

.button-get-plan a {
  display: flex;
  justify-content: center;
  align-items: center;
  background: #0DCAF0;
  color: black;
  padding: 10px 15px;
  border-radius: 5px;
  text-decoration: none;
  font-size: .8rem;
  letter-spacing: .05rem;
  font-weight: 500;
  transition: all 0.3s ease;
}

.button-get-plan a:hover {
  transform: translateY(-3%);
  box-shadow: 0 3px 10px rgba(207, 212, 222, 0.9);
}

.button-get-plan .svg-rocket {
  margin-right: 10px;
  width: .9rem;
  fill: currentColor;
}

/* FINISH CARD FOR SPONOR  */

/* CARD FOR PAY */
   .oggidomani{
        height: 300px;
        display: flex;
        justify-content: center;

    }
</style>

@endsection