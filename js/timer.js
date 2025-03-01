
    let currentTime, offerEndTime, s, m, h, d, diff, dn, hn, mn, sn;
    offerEndTime = new Date('31 Mar 2024 00: 00: 00').getTime();
    s = 1000;
    m = s * 60;
    h = m * 60;
    d = h * 24;

    setInterval(offerEnds, 1000);

    function offerEnds() {
      currentTime = new Date().getTime();

      diff = offerEndTime - currentTime;



      dn = Math.floor(diff / d);
      hn = Math.floor((diff % d) / h);
      mn = Math.floor((diff % h) / m);
      sn = Math.floor((diff % m) / s);

      document.getElementById("day").innerHTML = dn;
      document.getElementById("hour").innerHTML = hn;
      document.getElementById("min").innerHTML = mn;
      document.getElementById("second").innerHTML = sn;
    }