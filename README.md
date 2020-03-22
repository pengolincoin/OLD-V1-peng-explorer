# Elphyrecoin2-Blockchain-Explorer
Block explorer for Elphyrecoin2 CryptoNote based cryptocurrency.

#### Installation

1) It takes data from daemon Elphyrecoind. It should be accessible from the Internet. Run Elphyrecoind with open port as follows:
```bash
./Elphyrecoind --enable-cors="*" --enable-blockexplorer --rpc-bind-ip=0.0.0.0 --rpc-bind-port=45501
```
2) Just upload to your website and change 'api' variable in config.js to point to your daemon.


### Development
Devs:
    @devopsralf

Donate: [TRTL] TRTLv2RCPuD7AaaVpQkRPF59MMLx5WW3qFxwJz4Doy7dHhNA6UuQjEpLL3rpUQS4RXdQn8fb4P1XC3K62GeJjGgG8DP9LNaTrNL

### Note

A lot of this code is from the great Karbovanets/Karbowanec-Blockchain-Explorer
