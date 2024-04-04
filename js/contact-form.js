// populate dropdown with state abbreviations
const states = ["AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY"];
    for(var i = 0; i < states.length; i++) {
        var select = document.getElementById("state");
        var option = document.createElement("option");
        option.text = states[i];
        option.value = states[i];
        select.appendChild(option);
    }