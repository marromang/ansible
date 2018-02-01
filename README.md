# ansible
### Regla iptables
iptables -t nat PREROUTING -p tcp --dport 80 -j DNAT --to-destination 10.0.0.12:80
