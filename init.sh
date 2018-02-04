#!/bin/bash
vagrant up


until [[ -n "${ip1}" ]] 
		do
			echo "Getting Ip 1"
			sleep 1
			ip1=$(vagrant ssh nodo1 -c "ip address show eth1 | grep 'inet ' | sed -e 's/^.*inet //' -e 's/\/.*$//'")
		done

until [[ -n "${ip2}" ]] 
		do
			echo "Getting Ip 2"
			sleep 1
			ip2=$(vagrant ssh nodo2 -c "ip address show eth1 | grep 'inet ' | sed -e 's/^.*inet //' -e 's/\/.*$//'")
		done
