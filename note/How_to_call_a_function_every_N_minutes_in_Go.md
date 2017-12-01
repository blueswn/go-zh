# How_to_call_a_function_every_N_minutes_in_Go

    package main

    import (
    	"time"
    	"fmt"
    )

    func main()  {
    	ticker := time.NewTicker(time.Second * 1)

    	for _ = range ticker.C {
    		fmt.Println("ticked at %v", time.Now())
    	}
    }
