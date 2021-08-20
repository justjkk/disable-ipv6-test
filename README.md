# README

This repo contains examples that show how to disable IPv6 DNS requests(AAAA)
when using different languages and libraries.

## PHP

Guzzle uses libcurl which by default fetches both A and AAAA records.

It doesn't seem to be affected by `/etc/sysctl.conf`. Instead, this behavior
can be controlled by passing additional parameters in the requests like shown
in the examples. Examples having ipv4 in the name don't fetch AAAA records.
Requires curl 7.10.8. Ref: https://stackoverflow.com/a/23818382

## Python

Python requests library makes only IPv4 lookup when the following is added to `/etc/sysctl.conf`(reboot required):

```conf
net.ipv6.conf.all.disable_ipv6 = 1
net.ipv6.conf.default.disable_ipv6 = 1
```

TODO: Inside docker only IPv4 requests are coming. Need to investigate further.


## How to monitor DNS requests

* Run `sudo tcpdump dst port 53` in another terminal window to monitor the DNS packets.
* Alternatively install wireshark and then run `sudo tshark -Y 'udp.port == 53'` which will display the DNS response packets as well.
* If you are testing requests made from inside docker container, you can run these on the host machine.
