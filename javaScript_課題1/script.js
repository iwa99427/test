//<-- 問１-->
for(var star = 1; star <= 6; star++) {
    document.write("★");
}

document.write("<br>");
document.write("<br>");


//<-- 問2-->
for(var star = 1; star <= 2; star++) {
    for(var star2 = 1; star2 <= 3; star2++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//<-- 問3-->
for(var star = 1; star <= 2; star++) {
    for(var star2 = 1; star2 <= 5; star2++) {
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//<-- 問4-->
for(var star = 1; star <= 4; star++) {
    for(var star2 = 1; star2 <= 5; star2++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//<-- 問5-->
for(var star = 1; star <= 4; star++) {
    for(var star2 = 1;star2 <= 3; star2++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//<-- 問6-->
for(var star = 1; star <= 3; star++) {
    for(var star2 = 0; star2 < 3; star2++) {
        if(star2 % 2 != 1) {
            document.write("★");
        }
        else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//<-- 問7-->
for(var star = 1; star <= 4; star++) {
    for(var star2 = 0; star2  <= 4; star2++) {
        if(star2 % 2 == 0) {
            document.write("★");
        }
        else {
            document.write("☆");
        }
        
    }
    document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//<-- 問8-->
for(var star = 1; star <= 5; star++) {
    for(var star2 = 1; star2 <= star; star2++) {
        document.write("★");
    }
    document.write("<br>");
}