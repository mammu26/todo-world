<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: services.proto

namespace GPBMetadata;

class Services
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f300a0e73657276696365732e70726f746f2296010a0b41737369676e" .
            "526f6c657312100a08557365724e616d6518012001280912130a0b506572" .
            "6d697373696f6e73180220032809120d0a05526f6c657318032003280912" .
            "240a044d65746118042003280b32162e41737369676e526f6c65732e4d65" .
            "7461456e7472791a2b0a094d657461456e747279120b0a036b6579180120" .
            "012809120d0a0576616c75651802200128093a02380122c3010a13417373" .
            "69676e526f6c6573526573706f6e736512100a08416c6c526f6c65731801" .
            "2003280912160a0e416c6c5065726d697373696f6e73180220032809122c" .
            "0a044d65746118032003280b321e2e41737369676e526f6c657352657370" .
            "6f6e73652e4d657461456e74727912270a0e526573706f6e736553746174" .
            "757318042001280b320f2e526573706f6e73655374617475731a2b0a094d" .
            "657461456e747279120b0a036b6579180120012809120d0a0576616c7565" .
            "1802200128093a02380122bb030a0c41757468656e74696361746512100a" .
            "0870726f7669646572180120012809120d0a055374617465180220012809" .
            "12130a0b6f617574685f746f6b656e18032001280912160a0e6f61757468" .
            "5f766572696669657218042001280912100a08557365724e616d65180520" .
            "01280912100a0850617373776f726418062001280912120a0a52656d656d" .
            "6265724d6518072001280812100a08436f6e74696e756518082001280912" .
            "110a094572726f7256696577180920012809120d0a056e6f6e6365180a20" .
            "012809120b0a03757269180b2001280912100a08726573706f6e7365180c" .
            "20012809120b0a03716f70180d20012809120a0a026e63180e2001280912" .
            "0e0a06636e6f6e6365180f2001280912160a0e557365546f6b656e436f6f" .
            "6b696518102001280812130a0b416363657373546f6b656e181120012809" .
            "12190a11416363657373546f6b656e536563726574181220012809120d0a" .
            "0573636f706518132001280912250a044d65746118142003280b32172e41" .
            "757468656e7469636174652e4d657461456e7472791a2b0a094d65746145" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28093a02380122dd020a1441757468656e746963617465526573706f6e73" .
            "65120e0a0655736572496418012001280912110a0953657373696f6e4964" .
            "18022001280912100a08557365724e616d6518032001280912130a0b4469" .
            "73706c61794e616d6518042001280912130a0b526566657272657255726c" .
            "18052001280912130a0b426561726572546f6b656e18062001280912140a" .
            "0c52656672657368546f6b656e18072001280912120a0a50726f66696c65" .
            "55726c180820012809120d0a05526f6c657318092003280912130a0b5065" .
            "726d697373696f6e73180a2003280912270a0e526573706f6e7365537461" .
            "747573180b2001280b320f2e526573706f6e7365537461747573122d0a04" .
            "4d657461180c2003280b321f2e41757468656e746963617465526573706f" .
            "6e73652e4d657461456e7472791a2b0a094d657461456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a023801228d" .
            "010a15436f6e7665727453657373696f6e546f546f6b656e12170a0f5072" .
            "65736572766553657373696f6e180120012808122e0a044d657461180220" .
            "03280b32202e436f6e7665727453657373696f6e546f546f6b656e2e4d65" .
            "7461456e7472791a2b0a094d657461456e747279120b0a036b6579180120" .
            "012809120d0a0576616c75651802200128093a02380122d8010a1d436f6e" .
            "7665727453657373696f6e546f546f6b656e526573706f6e736512360a04" .
            "4d65746118012003280b32282e436f6e7665727453657373696f6e546f54" .
            "6f6b656e526573706f6e73652e4d657461456e74727912130a0b41636365" .
            "7373546f6b656e18022001280912140a0c52656672657368546f6b656e18" .
            "032001280912270a0e526573706f6e736553746174757318042001280b32" .
            "0f2e526573706f6e73655374617475731a2b0a094d657461456e74727912" .
            "0b0a036b6579180120012809120d0a0576616c75651802200128093a0238" .
            "01222a0a0a437265617465546f646f120d0a055469746c65180120012809" .
            "120d0a054f7264657218022001280522540a12437265617465546f646f52" .
            "6573706f6e736512150a06526573756c7418012001280b32052e546f646f" .
            "12270a0e526573706f6e736553746174757318022001280b320f2e526573" .
            "706f6e736553746174757322180a0a44656c657465546f646f120a0a0249" .
            "64180120012803221e0a0b44656c657465546f646f73120f0a0349647318" .
            "01200328034202100022380a0d456d707479526573706f6e736512270a0e" .
            "526573706f6e736553746174757318012001280b320f2e526573706f6e73" .
            "6553746174757322700a0b46696c65436f6e74656e74120c0a044e616d65" .
            "180120012809120c0a0454797065180220012809120e0a064c656e677468" .
            "180320012805120c0a04426f647918042001280c12270a0e526573706f6e" .
            "736553746174757318052001280b320f2e526573706f6e73655374617475" .
            "732294010a0e476574416363657373546f6b656e12140a0c526566726573" .
            "68546f6b656e18012001280912160a0e557365546f6b656e436f6f6b6965" .
            "18022001280812270a044d65746118032003280b32192e47657441636365" .
            "7373546f6b656e2e4d657461456e7472791a2b0a094d657461456e747279" .
            "120b0a036b6579180120012809120d0a0576616c75651802200128093a02" .
            "380122b4010a16476574416363657373546f6b656e526573706f6e736512" .
            "130a0b416363657373546f6b656e180120012809122f0a044d6574611802" .
            "2003280b32212e476574416363657373546f6b656e526573706f6e73652e" .
            "4d657461456e74727912270a0e526573706f6e7365537461747573180320" .
            "01280b320f2e526573706f6e73655374617475731a2b0a094d657461456e" .
            "747279120b0a036b6579180120012809120d0a0576616c75651802200128" .
            "093a02380122150a07476574546f646f120a0a0249641801200128032251" .
            "0a0f476574546f646f526573706f6e736512150a06526573756c74180120" .
            "01280b32052e546f646f12270a0e526573706f6e73655374617475731802" .
            "2001280b320f2e526573706f6e7365537461747573220a0a08476574546f" .
            "646f7322530a10476574546f646f73526573706f6e736512160a07526573" .
            "756c747318012003280b32052e546f646f12270a0e526573706f6e736553" .
            "746174757318022001280b320f2e526573706f6e73655374617475732215" .
            "0a0548656c6c6f120c0a044e616d6518012001280922480a0d48656c6c6f" .
            "526573706f6e7365120e0a06526573756c7418012001280912270a0e5265" .
            "73706f6e736553746174757318022001280b320f2e526573706f6e736553" .
            "7461747573221b0a0b48656c6c6f536563757265120c0a044e616d651801" .
            "200128092298020a08526567697374657212100a08557365724e616d6518" .
            "012001280912110a0946697273744e616d6518022001280912100a084c61" .
            "73744e616d6518032001280912130a0b446973706c61794e616d65180420" .
            "012809120d0a05456d61696c18052001280912100a0850617373776f7264" .
            "18062001280912170a0f436f6e6669726d50617373776f72641807200128" .
            "0912110a094175746f4c6f67696e18082001280812100a08436f6e74696e" .
            "756518092001280912110a094572726f7256696577180a2001280912210a" .
            "044d657461180b2003280b32132e52656769737465722e4d657461456e74" .
            "72791a2b0a094d657461456e747279120b0a036b6579180120012809120d" .
            "0a0576616c75651802200128093a0238012288020a105265676973746572" .
            "526573706f6e7365120e0a0655736572496418012001280912110a095365" .
            "7373696f6e496418022001280912100a08557365724e616d651803200128" .
            "0912130a0b526566657272657255726c18042001280912130a0b42656172" .
            "6572546f6b656e18052001280912140a0c52656672657368546f6b656e18" .
            "062001280912270a0e526573706f6e736553746174757318072001280b32" .
            "0f2e526573706f6e736553746174757312290a044d65746118082003280b" .
            "321b2e5265676973746572526573706f6e73652e4d657461456e7472791a" .
            "2b0a094d657461456e747279120b0a036b6579180120012809120d0a0576" .
            "616c75651802200128093a023801220c0a0a5265736574546f646f73229b" .
            "010a0d526573706f6e73654572726f7212110a094572726f72436f646518" .
            "012001280912110a094669656c644e616d65180220012809120f0a074d65" .
            "737361676518032001280912260a044d65746118042003280b32182e5265" .
            "73706f6e73654572726f722e4d657461456e7472791a2b0a094d65746145" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28093a02380122be010a0e526573706f6e736553746174757312110a0945" .
            "72726f72436f6465180120012809120f0a074d6573736167651802200128" .
            "0912120a0a537461636b5472616365180320012809121e0a064572726f72" .
            "7318042003280b320e2e526573706f6e73654572726f7212270a044d6574" .
            "6118052003280b32192e526573706f6e73655374617475732e4d65746145" .
            "6e7472791a2b0a094d657461456e747279120b0a036b6579180120012809" .
            "120d0a0576616c75651802200128093a023801221c0a0b53747265616d46" .
            "696c6573120d0a05506174687318012003280922260a1253747265616d53" .
            "65727665724576656e747312100a084368616e6e656c7318012003280922" .
            "9b040a1a53747265616d5365727665724576656e7473526573706f6e7365" .
            "120f0a074576656e744964180120012803120f0a074368616e6e656c1802" .
            "2001280912100a0853656c6563746f72180420012809120c0a044a736f6e" .
            "180520012809120a0a024f70180620012809120e0a065461726765741807" .
            "2001280912130a0b43737353656c6563746f7218082001280912330a044d" .
            "65746118092003280b32252e53747265616d5365727665724576656e7473" .
            "526573706f6e73652e4d657461456e747279120e0a06557365724964180a" .
            "2001280912130a0b446973706c61794e616d65180b2001280912120a0a50" .
            "726f66696c6555726c180c2001280912170a0f497341757468656e746963" .
            "61746564180d2001280812100a084368616e6e656c73180e200328091211" .
            "0a09437265617465644174180f20012803120a0a02496418152001280912" .
            "150a0d556e526567697374657255726c181620012809121b0a1355706461" .
            "74655375627363726962657255726c18172001280912140a0c4865617274" .
            "6265617455726c181820012809121b0a13486561727462656174496e7465" .
            "7276616c4d7318192001280312150a0d49646c6554696d656f75744d7318" .
            "1a2001280312270a0e526573706f6e7365537461747573181e2001280b32" .
            "0f2e526573706f6e73655374617475731a2b0a094d657461456e74727912" .
            "0b0a036b6579180120012809120d0a0576616c75651802200128093a0238" .
            "0122430a04546f646f120a0a024964180120012803120d0a055469746c65" .
            "180220012809120d0a054f7264657218032001280512110a09436f6d706c" .
            "65746564180420012808229a010a0d556e41737369676e526f6c65731210" .
            "0a08557365724e616d6518012001280912130a0b5065726d697373696f6e" .
            "73180220032809120d0a05526f6c657318032003280912260a044d657461" .
            "18042003280b32182e556e41737369676e526f6c65732e4d657461456e74" .
            "72791a2b0a094d657461456e747279120b0a036b6579180120012809120d" .
            "0a0576616c75651802200128093a02380122c7010a15556e41737369676e" .
            "526f6c6573526573706f6e736512100a08416c6c526f6c65731801200328" .
            "0912160a0e416c6c5065726d697373696f6e73180220032809122e0a044d" .
            "65746118032003280b32202e556e41737369676e526f6c6573526573706f" .
            "6e73652e4d657461456e74727912270a0e526573706f6e73655374617475" .
            "7318042001280b320f2e526573706f6e73655374617475731a2b0a094d65" .
            "7461456e747279120b0a036b6579180120012809120d0a0576616c756518" .
            "02200128093a02380122490a0a557064617465546f646f120a0a02496418" .
            "0120012803120d0a055469746c65180220012809120d0a054f7264657218" .
            "032001280512110a09436f6d706c6574656418042001280832950c0a0c47" .
            "727063536572766963657312370a0f506f737441737369676e526f6c6573" .
            "120c2e41737369676e526f6c65731a142e41737369676e526f6c65735265" .
            "73706f6e73652200123d0a134f7074696f6e7341757468656e7469636174" .
            "65120d2e41757468656e7469636174651a152e41757468656e7469636174" .
            "65526573706f6e7365220012390a0f47657441757468656e746963617465" .
            "120d2e41757468656e7469636174651a152e41757468656e746963617465" .
            "526573706f6e73652200123a0a10506f737441757468656e746963617465" .
            "120d2e41757468656e7469636174651a152e41757468656e746963617465" .
            "526573706f6e73652200123c0a1244656c65746541757468656e74696361" .
            "7465120d2e41757468656e7469636174651a152e41757468656e74696361" .
            "7465526573706f6e7365220012550a19506f7374436f6e76657274536573" .
            "73696f6e546f546f6b656e12162e436f6e7665727453657373696f6e546f" .
            "546f6b656e1a1e2e436f6e7665727453657373696f6e546f546f6b656e52" .
            "6573706f6e7365220012340a0e506f7374437265617465546f646f120b2e" .
            "437265617465546f646f1a132e437265617465546f646f526573706f6e73" .
            "652200122f0a0e43616c6c44656c657465546f646f120b2e44656c657465" .
            "546f646f1a0e2e456d707479526573706f6e7365220012310a0f43616c6c" .
            "44656c657465546f646f73120c2e44656c657465546f646f731a0e2e456d" .
            "707479526573706f6e7365220012400a12506f7374476574416363657373" .
            "546f6b656e120f2e476574416363657373546f6b656e1a172e4765744163" .
            "63657373546f6b656e526573706f6e73652200122b0a0b43616c6c476574" .
            "546f646f12082e476574546f646f1a102e476574546f646f526573706f6e" .
            "73652200122e0a0c43616c6c476574546f646f7312092e476574546f646f" .
            "731a112e476574546f646f73526573706f6e7365220012240a0847657448" .
            "656c6c6f12062e48656c6c6f1a0e2e48656c6c6f526573706f6e73652200" .
            "12250a09506f737448656c6c6f12062e48656c6c6f1a0e2e48656c6c6f52" .
            "6573706f6e7365220012240a0850757448656c6c6f12062e48656c6c6f1a" .
            "0e2e48656c6c6f526573706f6e7365220012270a0b44656c65746548656c" .
            "6c6f12062e48656c6c6f1a0e2e48656c6c6f526573706f6e736522001226" .
            "0a0a506174636848656c6c6f12062e48656c6c6f1a0e2e48656c6c6f5265" .
            "73706f6e7365220012300a0e47657448656c6c6f536563757265120c2e48" .
            "656c6c6f5365637572651a0e2e48656c6c6f526573706f6e736522001231" .
            "0a0f506f737448656c6c6f536563757265120c2e48656c6c6f5365637572" .
            "651a0e2e48656c6c6f526573706f6e7365220012300a0e50757448656c6c" .
            "6f536563757265120c2e48656c6c6f5365637572651a0e2e48656c6c6f52" .
            "6573706f6e7365220012330a1144656c65746548656c6c6f536563757265" .
            "120c2e48656c6c6f5365637572651a0e2e48656c6c6f526573706f6e7365" .
            "220012320a10506174636848656c6c6f536563757265120c2e48656c6c6f" .
            "5365637572651a0e2e48656c6c6f526573706f6e73652200122d0a0b5075" .
            "74526567697374657212092e52656769737465721a112e52656769737465" .
            "72526573706f6e73652200122e0a0c506f7374526567697374657212092e" .
            "52656769737465721a112e5265676973746572526573706f6e7365220012" .
            "2f0a0e506f73745265736574546f646f73120b2e5265736574546f646f73" .
            "1a0e2e456d707479526573706f6e7365220012330a115365727665725374" .
            "7265616d46696c6573120c2e53747265616d46696c65731a0c2e46696c65" .
            "436f6e74656e742200300112500a1853657276657253747265616d536572" .
            "7665724576656e747312132e53747265616d5365727665724576656e7473" .
            "1a1b2e53747265616d5365727665724576656e7473526573706f6e736522" .
            "003001123d0a11506f7374556e41737369676e526f6c6573120e2e556e41" .
            "737369676e526f6c65731a162e556e41737369676e526f6c657352657370" .
            "6f6e73652200122e0a0d507574557064617465546f646f120b2e55706461" .
            "7465546f646f1a0e2e456d707479526573706f6e736522004218aa020954" .
            "6f646f576f726c64ca0209546f646f576f726c64620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

