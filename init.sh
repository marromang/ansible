#!/bin/bash
vagrant up

ip1=$(vagrant ssh nodo1 -c "ip address show eth1 | grep 'inet ' | sed -e 's/^.*inet //' -e 's/\/.*$//'")
ip2=$(vagrant ssh nodo2 -c "ip address show eth1 | grep 'inet ' | sed -e 's/^.*inet //' -e 's/\/.*$//'")

echo $ip1
echo $ip2