# PHP Pass-by-Reference and Array Increment Bug

This repository demonstrates a subtle bug in PHP related to pass-by-reference and array incrementation.  While pass-by-reference generally works well with scalar variables,  unexpected behavior can arise when used with arrays. The provided code exhibits this issue, and the solution showcases a safer approach to handling this scenario.

## Bug Description

The core issue lies in attempting to increment an array element using pass-by-reference. Although PHP doesn't throw an error, the behavior might deviate from what is expected. The 'increment' function demonstrates the problem. When called with a scalar, it works as intended. However, when called with an array, PHP's loose type handling can lead to unexpected changes or errors.