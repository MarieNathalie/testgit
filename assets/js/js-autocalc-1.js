 let params; 
        function parse_get_params()
        {
            params = window
            .location
            .search
            .replace('?','')
            .split('&')
            .reduce(
                function(p,e){
                    var a = e.split('=');
                    p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                    return p;
                },
                {}
            );
        }
    
        function itog()
        {
            let rash_benz = Number($("#fuel-consumption__input").val());
            
            if (rash_benz)
                window.location.replace("?rash=" + rash_benz);
        } 

function calculate()
        {
            let input_rash_benz = $("#fuel-consumption__input").val();
            let input_speed = $("#speed-start__input").val();
            let input_ost_benz = $("#fuel-start__input").val();
            let input_probeg = $("#mileage__input").val();
            let input_zapra = $("#flooded__input").val();
 
            let rash_benz = Number(input_rash_benz);  // Расход топлива
            let speed = Number(input_speed);   // Показания спидометра на выезде
            let ost_benz = Number(input_ost_benz);   // Остаток топлива в баке на выезеде
            let probeg = Number(input_probeg);  // Пробег на маршруте
            let zapra = Number(input_zapra); // Заправил на маршруте
           
            let res_km = $("#mileage-total__input");  // Показания спидометра в конце маршрута
            let res_litr = $("#liters-total__input");  // Остаток топлива в баке в конце маршрута
            let res_flow = $("#liters-flow__input");  // Расход топлива на маршруте
           
            if (!res_km || !res_litr)
                return;
           
            if (input_speed && input_probeg)
            {
                res_km.val(speed + probeg);
            }
           
            if (input_rash_benz && input_ost_benz && input_probeg && input_zapra)
            {
                res_litr.val((zapra + ost_benz - ( probeg * ( rash_benz / 100 ) )).toFixed(2) );
            }
 
            if (input_rash_benz && input_probeg)
            {
                res_flow.val(( probeg * ( rash_benz / 100 )).toFixed(2));
            }
        }
    
        $(document).ready(function() {
            parse_get_params();
            
            if (params['rash'])
            {
                let rash_benz = $("#fuel-consumption__input");
                
                if (rash_benz)
                {
                    rash_benz.val(params['rash']);
                }
                else alert('sd');
            }
            
        });